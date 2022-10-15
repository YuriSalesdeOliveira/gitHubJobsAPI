<?php

namespace Source\Infra\Http\Controllers;

class Web
{
    public function index(): void
    {
        echo 'index';
    }

    public function jobs(): void
    {
        $jobs = [
            [
                'id' => '330099',
                'image' => 'https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(95)/afabrica/catalog/loja/FA-453.jpg',
                'author' => 'Kasisto',
                'title' => 'Front-End Software Engineer',
                'tags' => ['Full time'],
                'city' => 'New York',
                'createdAt' => '5 days ago'
            ],
            [
                'id' => '335599',
                'image' => 'https://st3.depositphotos.com/2036925/19215/i/1600/depositphotos_192153730-stock-photo-fried-scallops-with-butter-sauce.jpg',
                'author' => 'Caroline',
                'title' => 'Front-End Devops',
                'tags' => ['Mide time'],
                'city' => 'Los Angeles',
                'createdAt' => '10 days ago'
            ],
            [
                'id' => '886699',
                'image' => 'https://st4.depositphotos.com/2036925/21768/i/1600/depositphotos_217688708-stock-photo-fresh-homemade-cottage-cheese-cheesecloth.jpg',
                'author' => 'Oliveira',
                'title' => 'Back-End Quality Softwares',
                'tags' => ['End time'],
                'city' => 'Porto Seguro',
                'createdAt' => '15 days ago'
            ]
        ];

        echo json_encode($jobs);
    }

    public function job($data): void
    {
        $jobs = [
            330099 => [
                'id' => '330099',
                'image' => 'https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(95)/afabrica/catalog/loja/FA-453.jpg',
                'author' => 'Kasisto',
                'title' => 'Front-End Software Engineer',
                'tags' => ['Full time'],
                'city' => 'New York',
                'createdAt' => '5 days ago'
            ],
            335599 => [
                'id' => '335599',
                'image' => 'https://st3.depositphotos.com/2036925/19215/i/1600/depositphotos_192153730-stock-photo-fried-scallops-with-butter-sauce.jpg',
                'author' => 'Caroline',
                'title' => 'Front-End Devops',
                'tags' => ['Mide time'],
                'city' => 'Los Angeles',
                'createdAt' => '10 days ago'
            ],
            886699 => [
                'id' => '886699',
                'image' => 'https://st4.depositphotos.com/2036925/21768/i/1600/depositphotos_217688708-stock-photo-fresh-homemade-cottage-cheese-cheesecloth.jpg',
                'author' => 'Oliveira',
                'title' => 'Back-End Quality Softwares',
                'tags' => ['End time'],
                'city' => 'Porto Seguro',
                'createdAt' => '15 days ago'
            ]
        ];

        echo json_encode($jobs[$data['job']]);
    }
}
