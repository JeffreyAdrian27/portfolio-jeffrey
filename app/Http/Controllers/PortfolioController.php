<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profileData = [
            'name' => 'Jeffrey Adrian',
            'title' => 'S1 Informatika',
            'bio' => 'Passionate Software Developer dedicated to designing and building modern web and mobile applications. I enjoy turning creative ideas into functional and interactive digital solutions, complemented by a solid foundational understanding of IT support and infrastructure.',
            'contact' => [
                'email' => 'jeffreyadrian2702@gmail.com',
                'whatsapp' => '+62 812-3060-5315',
                'whatsapp_url' => 'https://wa.me/6281230605315',
                'instagram' => '@jeffrey_a27',
                'instagram_url' => 'https://instagram.com/jeffrey_a27',
                'linkedin' => 'Jeffrey Adrian',
                'linkedin_url' => 'https://www.linkedin.com/in/jeffrey-adrian-31693525a/',
                'github' => 'JeffreyAdrian27',
                'github_url' => 'https://github.com/JeffreyAdrian27?tab=repositories',
                'location' => 'Surabaya, Jawa Timur, Indonesia'
            ],
            'skills' => [
                [
                    'number' => '01',
                    'title' => 'React Native',
                    'category' => 'Frontend & Mobile',
                    'description' => 'Components for modern web and mobile apps.',
                    'tags' => ['React Native', 'JavaScript', 'Expo'],
                    'items' => 'React Native, JavaScript, HTML, CSS, Tailwind CSS'
                ],
                [
                    'number' => '02',
                    'title' => 'Laravel',
                    'category' => 'Backend & MVC',
                    'description' => 'Elegant MVC architecture and robust RESTful APIs.',
                    'tags' => ['Laravel 12', 'PHP 8.2', 'Eloquent'],
                    'items' => 'Node.js, Laravel, Firebase, MySQL'
                ],
                [
                    'number' => '03',
                    'title' => 'Docker',
                    'category' => 'DevOps & Tooling',
                    'description' => 'Containerize your workflow easily and streamline deployment.',
                    'tags' => ['Docker', 'Containers', 'Apache'],
                    'items' => 'Docker, Apache, PHP'
                ],
                [
                    'number' => '04',
                    'title' => 'Tailwind CSS',
                    'category' => 'Styling & UI',
                    'description' => 'Utility-first styling for modern responsive interfaces.',
                    'tags' => ['Tailwind v4', 'Responsive', 'CSS3'],
                    'items' => 'Tailwind CSS, Modern UI, Responsive Layout'
                ],
                [
                    'number' => '05',
                    'title' => 'Node.js',
                    'category' => 'Backend Runtime',
                    'description' => 'High-throughput asynchronous server-side APIs.',
                    'tags' => ['Node.js', 'Express', 'Async IO'],
                    'items' => 'Node.js, Express, REST APIs'
                ],
                [
                    'number' => '06',
                    'title' => 'MySQL & Firebase',
                    'category' => 'Database & Cloud',
                    'description' => 'Relational database schemas and real-time cloud data.',
                    'tags' => ['MySQL', 'Firebase', 'SQL'],
                    'items' => 'MySQL, Firebase, Database Schemas'
                ],
                [
                    'number' => '07',
                    'title' => 'API Integration',
                    'category' => 'Services & Payment',
                    'description' => 'Seamless payment gateways and logistic webhooks.',
                    'tags' => ['Midtrans', 'RajaOngkir', 'Webhooks'],
                    'items' => 'Midtrans API, RajaOngkir API'
                ],
                [
                    'number' => '08',
                    'title' => 'Git & Dev Tools',
                    'category' => 'Tools & Workflow',
                    'description' => 'Modern version control workflows and automated testing.',
                    'tags' => ['Git & GitHub', 'Postman', 'VS Code'],
                    'items' => 'Git & GitHub, Postman, Visual Studio Code'
                ],
                [
                    'number' => '09',
                    'title' => 'Data Analyst (Python)',
                    'category' => 'Data & Analytics',
                    'description' => 'Data analysis, statistical modeling, and actionable insights using Python.',
                    'tags' => ['Python', 'Pandas', 'NumPy', 'Data Viz'],
                    'items' => 'Python, Pandas, NumPy, Data Analytics, Data Visualization'
                ],
                [
                    'number' => '10',
                    'title' => 'Agentic AI Workflows',
                    'category' => 'AI & Workflows',
                    'description' => 'Autonomous agentic AI systems, prompt engineering, and UI design workflows.',
                    'tags' => ['Antigravity', 'Figma', 'Stitch', 'AI Agents'],
                    'items' => 'Antigravity, Figma, Stitch, Agentic Workflows, AI Engineering'
                ],
            ],
            'education' => [
                [
                    'year' => '2019 – 2026',
                    'degree' => 'Bachelor of Computer Science (S1 Informatika)',
                    'institution' => 'Institut Sains dan Teknologi Terpadu Surabaya (ISTTS)',
                ],
                [
                    'year' => '2016 – 2019',
                    'degree' => 'Senior High School (SMA)',
                    'institution' => 'SMA Kristen Petra 1, Surabaya',
                ],
                [
                    'year' => '2013 – 2016',
                    'degree' => 'Junior High School (SMP)',
                    'institution' => 'SMP Kristen Petra 1, Surabaya',
                ],
                [
                    'year' => '2007 – 2013',
                    'degree' => 'Elementary School (SD)',
                    'institution' => 'SD Kristen Petra 10, Surabaya',
                ],
                [
                    'year' => '2005 – 2007',
                    'degree' => 'Kindergarten (TK)',
                    'institution' => 'TK Kristen Petra 10, Surabaya',
                ],
            ],
            'experience' => [
                [
                    'year' => 'Jan 2023 – May 2023',
                    'role' => 'Software Engineer',
                    'company' => 'DEUS CODE · Full-Time',
                    'description' => 'Developed application features in accordance with client requirements, handling both frontend and backend tasks while collaborating closely with the project team and clients.',
                    'tags' => ['FRONTEND', 'BACKEND', 'SOFTWARE DEV', 'FULL-TIME'],
                    'points' => [
                        'Developed application features according to client requirements within project teams.',
                        'Handled frontend and backend development based on team task distribution.',
                        'Collaborated closely with cross-functional teams throughout the software development process.',
                        'Participated in client meetings to understand system requirements and specifications.',
                        'Assisted in ensuring applications ran according to project requirements and delivery targets.',
                        'Coordinated regularly with the team lead regarding progress and feature development.'
                    ]
                ]
            ],
            'certificates' => [
                [
                    'title' => 'AI Inference At The Edge (Deep Learning)',
                    'file' => 'sertifikat/AI Inference At The Edge.png',
                    'thumbnail' => 'sertifikat/AI Inference At The Edge.png',
                    'images' => [
                        'sertifikat/AI Inference At The Edge.png'
                    ],
                    'date' => '2021',
                    'issuer' => 'Advanced Specialization'
                ],
                [
                    'title' => 'AI-Assisted Web Development (Full-Stack)',
                    'file' => 'sertifikat/AI-Assisted Web Development.png',
                    'thumbnail' => 'sertifikat/AI-Assisted Web Development.png',
                    'images' => [
                        'sertifikat/AI-Assisted Web Development.png',
                        'sertifikat/AI-Assisted Web Development pages 2.png'
                    ],
                    'date' => '2026',
                    'issuer' => 'Advanced Specialization'
                ],
                [
                    'title' => 'Python For Data Science & Analytics',
                    'file' => 'sertifikat/Python For Data Science.png',
                    'thumbnail' => 'sertifikat/Python For Data Science.png',
                    'images' => [
                        'sertifikat/Python For Data Science.png',
                        'sertifikat/Python For Data Science pages 2.png'
                    ],
                    'date' => '2026',
                    'issuer' => 'Advanced Specialization'
                ]
            ],
            'projects' => [
                [
                    'title' => 'Recycle Apps',
                    'category' => 'Mobile App',
                    'description' => 'A modern mobile e-commerce platform featuring in-app chat negotiation between sellers and buyers, location filtering, checkout functionalities, etc.',
                    'link' => '#',
                    'tags' => ['React Native', 'Node.js', 'Expo', 'Firebase'],
                    'images' => ['project1/recycle1.png', 'project1/recycle2.png','project1/recycle3.png', 'project1/recycle4.png']
                ],
                [
                    'title' => 'Website for PT Afro Maritim',
                    'category' => 'Web App',
                    'description' => 'A comprehensive company management platform developed for PT Afro Maritim to streamline internal operations, track workforce performance, and optimize daily maritime business processes efficiently, etc.',
                    'link' => '#',
                    'tags' => ['Laravel', 'Node.js', 'MySQL', 'Bootstrap'],
                    'images' => ['project2/afro1.png', 'project2/afro2.png', 'project2/afro3.png', 'project2/afro4.png']
                ],
                [
                    'title' => 'Website for EC Mansion',
                    'category' => 'Web App',
                    'description' => 'A professional company profile website developed for EC Maison to showcase high-end interior design projects, present company vision and mission, and streamline client inquiries through an accessible contact system efficiently, etc.',
                    'link' => '#',
                    'tags' => ['HTML', 'CSS', 'JavaScript'],
                    'images' => ['project3/ec1.png', 'project3/ec2.png', 'project3/ec3.png']
                ],
                [
                    'title' => 'Website for Kopi Harapan',
                    'category' => 'Web App',
                    'description' => 'A modern and aesthetic coffee shop profile website developed for Kopi Harapan to showcase curated signature coffee blends, cafe ambiance, interactive menu catalogs, customer testimonials, and direct ordering / reservation links.',
                    'link' => '#',
                    'tags' => ['HTML', 'Tailwind CSS', 'JavaScript'],
                    'images' => ['project4/kopiharapan1.png', 'project4/kopiharapan2.png', 'project4/kopiharapan3.png', 'project4/kopiharapan4.png']
                ]
            ]
        ];

        return view('portofolio', compact('profileData'));
    }
}
