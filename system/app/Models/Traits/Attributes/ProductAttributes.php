<?php

namespace App\Models\Traits\Attributes;
use Illuminate\Support\Str;

trait ProductAttributes {
    function getHargaStringAttribute(){
        return"Rp. ".number_format($this->attributes['harga']);
    }

    function handleUploadFoto(){
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/produk";
            $randomStr = Str::random(5);
            $filename = $this->id."_".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    function handleDelete(){
        $foto = $this->foto;
     
        return true;
    }

}