<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profileData = [
            'name' => 'Jeffrey Adrian',
            'title' => 'Informatika | Software Developer, IT Staff',
            'bio' => 'Passionate Software Developer dedicated to designing and building modern web and mobile applications. I enjoy turning creative ideas into functional and interactive digital solutions, complemented by a solid foundational understanding of IT support and infrastructure.',
            'skills' => [
                ['category' => 'Frontend & Mobile', 'items' => 'React Native, JavaScript, HTML, CSS, Tailwind CSS'],
                ['category' => 'Backend & Database', 'items' => 'Node.js, Laravel, Firebase, MySQL'],
                ['category' => 'Integration & Services', 'items' => 'Midtrans API, RajaOngkir API'],
                ['category' => 'Tools & Version Control', 'items' => 'Git & GitHub, Postman, Visual Studio Code'],
            ],
            'projects' => [
                [
                    'title' => 'Recycle Apps',
                    'description' => 'A modern mobile e-commerce platform featuring in-app chat negotiation between sellers and buyers, location filtering, checkout functionalities, etc.',
                    'link' => '#',
                    'images' => ['project1/recycle1.png', 'project1/recycle2.png','project1/recycle3.png', 'project1/recycle4.png']
                ],
                [
                    'title' => 'Website for PT Afro Maritim',
                    'description' => 'A comprehensive company management platform developed for PT Afro Maritim to streamline internal operations, track workforce performance, and optimize daily maritime business processes efficiently, etc.',
                    'link' => '#',
                    'images' => ['project2/afro1.png', 'project2/afro2.png', 'project2/afro3.png', 'project2/afro4.png']
                ],
                [
                    'title' => 'Website for EC Mansion',
                    'description' => '"A professional company profile website developed for EC Maison to showcase high-end interior design projects, present company vision and mission, and streamline client inquiries through an accessible contact system efficiently, etc.',
                    'link' => '#',
                    'images' => ['project3/ec1.png', 'project3/ec2.png', 'project3/ec3.png']
                ]
            ]
        ];

        return view('portofolio', compact('profileData'));
    }
}
