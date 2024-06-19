<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class ProcessSaveJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mainImage;
    protected $photoDoc;
    protected $propertyType;
    protected $street;
    protected $description;
    protected $numberOfRooms;
    protected $propertyState;
    protected $municipe;
    protected $descInput;
    protected $estrada;
    protected $precario;
    protected $otherPics;
    protected $token;
    protected $mainImagePath;
    protected $agua;
    protected $mainImageName;
    protected $energia;
    protected $otherPics1;

    public function __construct($mainImagePath, $mainImageName, $propertyType, $street, $description, $municipe, $agua, $energia, $estrada, $precario, $otherPics, $otherPics1 = [], $token)
    {
        $this->mainImagePath = $mainImagePath;
        $this->mainImageName = $mainImageName;
        $this->propertyType = $propertyType;
        $this->street = $street;
        $this->description = $description;
        $this->municipe = $municipe;
        $this->precario = $precario;
        $this->agua = $agua;
        $this->energia = $energia;
        $this->estrada = $estrada;

        $this->otherPics = $otherPics;
        $this->otherPics1 = $otherPics1;
        $this->token = $token;
        // if ($photoDocName !== null)
        // {
        //     $mainImageContents = file_get_contents(storage_path('app/' . $this->mainImagePath));

        //     $response = Http::withToken($this->token)
        //     ->attach('property_img', $mainImageContents, $this->mainImageName)
        //     ->post('http://u_mbanji.test/api/register-property', [
        //         "property_type" => $this->propertyType,
        //         "property_location" => $this->street,
        //         "property_description" => $this->description,
        //         "property_bedRoom" => $this->numberOfRooms,
        //         "property_status" => $this->propertyState,
        //         "municipality_id" => $this->municipe,
        //     ]);

        // // Excluir as imagens temporárias
        // Storage::delete([$this->mainImagePath, $this->photoDocPath]);
        // }
        // else
        // {
            // dd(
            // $this->mainImagePath = $mainImagePath,
            // $this->mainImageName = $mainImageName,
            // $this->propertyType = $propertyType,
            // $this->street = $street,
            // $this->description = $description,
            // $this->municipe = $municipe,
            // $this->precario = $precario,
            // $this->agua = $agua,
            // $this->energia = $energia,
            // $this->estrada = $estrada,

            // $this->otherPics = $otherPics,
            // $this->otherPics1 = $otherPics1,
            // $this->token = $token
        // );

            $mainImageContents = file_get_contents(storage_path('app/' . $this->mainImagePath));
            $response = Http::withToken($this->token)
                ->attach('property_img', $mainImageContents, $this->mainImageName)
                ->post('http://u_mbanji.test/api/register-property', [
                    "property_type" => $this->propertyType,
                    "property_location" => $this->street,
                    "property_description" => $this->description,
                    "agua" => $this->agua,
                    "energia" => $this->energia,
                    "estrada" => $this->estrada,
                    "municipality_id" => $this->municipe,
                ]);

            Storage::delete($this->mainImagePath);
// dd($response->status(), $response->json());
        // Verificar se a requisição foi bem-sucedida
        if ($response->status() == 201) {
            $retorno = $response->json();

            if (!empty($this->precario)) {
                $response3 = Http::withToken($this->token)
                    ->post('http://u_mbanji.test/api/register-property-price', [
                        "property_id" => $retorno['id'],
                        "price" => $this->precario,
                    ]);
            }
            // Enviar imagens adicionais (se houver)
            if (!empty($this->otherPics1)) {
                foreach ($this->otherPics1 as $img) {

                    $teste = file_get_contents(storage_path('app/' . $img['path']));
                    $response4 = Http::withToken($this->token)
                        ->attach('img_file', $teste, $img['name'])
                        ->post('http://u_mbanji.test/api/register-property-img', [
                            "property_id" => $retorno['id'],
                        ]);

                    Storage::delete($img['path']);
    }
            }
        }
        // dd($response4->status());

    }


    public function handle()
    {

    }
}
