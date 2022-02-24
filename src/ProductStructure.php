<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {

        $segmentations = [];
        $preto = [];
        $branco = [];
        $azul = [];
        $vermelho = [];

        foreach (self::products as $product)
        {
            array_push($segmentations, explode('-', $product));
        }

        foreach ($segmentations as $segmentation)
        {
            if ($segmentation[0] == 'preto')
            {
                $c = ['preto' => $segmentation[1]];
                array_push($preto, $c['preto']);
            }

            if ($segmentation[0] == 'branco')
            {
                $c = ['branco' => $segmentation[1]];
                array_push($branco, $c['branco']);
            }

            if ($segmentation[0] == 'vermelho')
            {
                $c = ['vermelho' => $segmentation[1]];
                array_push($vermelho, $c['vermelho']);
            }

            if ($segmentation[0] == 'azul')
            {
                $c = ['azul' => $segmentation[1]];
                array_push($azul, $c['azul']);
            }
        }

        $p = array_count_values($preto);
        $b = array_count_values($branco);
        $a = array_count_values($azul);
        $v = array_count_values($vermelho);

        $colors = [
            'preto'    => $p,
            'branco'   => $b,
            'vermelho' => $v,
            'azul'     => $a
        ];

        return $colors;
    }
}