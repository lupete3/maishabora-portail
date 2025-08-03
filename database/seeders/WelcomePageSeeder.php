<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSection;
use App\Models\Feature;
use App\Models\PricingPlan;
use App\Models\HowItWorksStep;
use App\Models\Stat;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\ContactDetail;

class WelcomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        HeroSection::create([
            'subtitle' => 'Solutions Financières Innovantes',
            'title' => 'Services Financiers Sécurisés, Efficaces et Conviviaux',
            'description' => "Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux pour la communauté de Bukavu.",
            'button_one_text' => 'Commencez Maintenant',
            'button_one_link' => '#',
            'button_two_text' => 'En Savoir Plus',
            'button_two_link' => '#',
            'image_card_path' => 'assets/images/ensemble.jpg',
            'image_main_path' => 'assets/images/hero-img-1-min.jpg',
        ]);

        // Features
        Feature::create([
            'icon' => 'bi bi-person-check',
            'title' => 'Interface Conviviale',
            'description' => 'Navigation facile avec un design adaptatif pour divers appareils.',
            'display_order' => 1
        ]);
        Feature::create([
            'icon' => 'bi bi-graph-up',
            'title' => 'Analyse Financière',
            'description' => 'Suivi budgétaire, catégorisation des dépenses et informations personnalisées.',
            'display_order' => 2
        ]);
        Feature::create([
            'icon' => 'bi bi-headset',
            'title' => 'Support Client',
            'description' => "Service 24/7 par chat, e-mail, téléphone et un centre d'aide détaillé.",
            'display_order' => 3
        ]);
        Feature::create([
            'icon' => 'bi bi-shield-lock',
            'title' => 'Sécurité Renforcée',
            'description' => 'Cryptage des données, détection et prévention de la fraude.',
            'display_order' => 4
        ]);

        // Pricing Plans
        PricingPlan::create([
            'name' => 'Crédit Individuel',
            'description' => 'Choisissez un plan qui correspond à vos besoins financiers personnels et commencez à gérer vos finances plus efficacement.',
            'price_string' => 'À partir de 100'
        ]);

        // How It Works Steps
        HowItWorksStep::create([
            'step_number' => 1,
            'title' => 'Demande de crédit',
            'description' => "Visitez notre agence ou contactez-nous pour remplir un formulaire de demande de crédit."
        ]);
        HowItWorksStep::create([
            'step_number' => 2,
            'title' => 'Analyse du dossier',
            'description' => "Nous analysons votre demande et votre projet pour vous proposer la meilleure solution."
        ]);
        HowItWorksStep::create([
            'step_number' => 3,
            'title' => 'Déboursement',
            'description' => "Une fois votre dossier approuvé, les fonds sont décaissés rapidement sur votre compte."
        ]);
        HowItWorksStep::create([
            'step_number' => 4,
            'title' => 'Remboursement',
            'description' => "Remboursez votre crédit selon les modalités convenues et faites croître votre activité."
        ]);

        // Stats
        Stat::create([
            'end_value' => 10,
            'suffix' => 'K+',
            'label' => 'Satisfaction Client',
            'display_order' => 1
        ]);
        Stat::create([
            'end_value' => 200,
            'suffix' => '%+',
            'label' => 'Augmentation des revenus',
            'display_order' => 2
        ]);
        Stat::create([
            'end_value' => 20,
            'suffix' => 'x',
            'label' => 'Croissance des entreprises',
            'display_order' => 3
        ]);

        // Services
        Service::create([
            'icon' => 'bi bi-cash-coin',
            'title' => 'Microcrédit',
            'description' => "Des prêts adaptés aux besoins des petits entrepreneurs pour démarrer ou développer leurs activités.",
            'link' => '#',
            'display_order' => 1
        ]);
        Service::create([
            'icon' => 'bi bi-wallet2',
            'title' => 'Épargne',
            'description' => "Des solutions d'épargne flexibles et sécurisées pour vous aider à atteindre vos objectifs financiers.",
            'link' => '#',
            'display_order' => 2
        ]);
        Service::create([
            'icon' => 'bi bi-book',
            'title' => 'Formation Financière',
            'description' => "Des ateliers et des formations pour renforcer vos compétences en gestion financière et entrepreneuriale.",
            'link' => '#',
            'display_order' => 3
        ]);

        // Testimonials
        Testimonial::create([
            'quote' => "Cette plateforme a complètement transformé la façon dont je gère les finances de mon entreprise. Le suivi des transactions en temps réel et les options de paiement transparentes m'ont fait gagner tellement de temps et d'efforts !",
            'author_image_path' => 'assets/images/person-sq-2-min.jpg',
            'author_name' => 'Jean-Pierre Kasongo',
            'author_title' => 'Commerçant',
            'display_order' => 1
        ]);
        Testimonial::create([
            'quote' => "En tant que couturière, la gestion de mes finances peut être écrasante. Les outils de budgétisation et les conseils personnalisés m'ont permis de mieux suivre mes dépenses et de planifier l'avenir de mon atelier.",
            'author_image_path' => 'assets/images/person-sq-1-min.jpg',
            'author_name' => 'Marie-Claire Mbuyi',
            'author_title' => 'Artisane',
            'display_order' => 2
        ]);
        Testimonial::create([
            'quote' => "Les options de crédit de groupe sont fantastiques. Travailler avec d'autres membres de ma communauté nous a permis de mettre en commun nos ressources et d'investir dans des projets plus importants. Les recommandations de Maisha Bora sont toujours pertinentes et nous aident à faire croître nos entreprises.",
            'author_image_path' => 'assets/images/person-sq-5-min.jpg',
            'author_name' => 'Alain Ngoy',
            'author_title' => 'Agriculteur',
            'display_order' => 3
        ]);

        // FAQs
        Faq::create([
            'question' => "Qui peut bénéficier d'un crédit chez Maisha Bora Asbl ?",
            'answer' => "Nos services s'adressent principalement aux petits entrepreneurs, aux commerçants, aux artisans, aux femmes et aux jeunes de Bukavu qui ont une activité génératrice de revenus. Il faut être majeur et résider dans notre zone d'intervention.",
            'is_open_by_default' => true,
            'display_order' => 1
        ]);
        Faq::create([
            'question' => "Quels sont les documents requis pour une demande de crédit ?",
            'answer' => "Pour une première demande, vous aurez généralement besoin d'une pièce d'identité valide, d'un justificatif de domicile, et d'une preuve de votre activité économique. Les exigences peuvent varier en fonction du type et du montant du crédit demandé.",
            'display_order' => 2
        ]);
        Faq::create([
            'question' => "Combien de temps faut-il pour obtenir un prêt ?",
            'answer' => "Nous nous efforçons de traiter les demandes le plus rapidement possible. En général, après soumission d'un dossier complet, le processus d'analyse et de déboursement des fonds peut prendre entre 7 et 14 jours ouvrables.",
            'display_order' => 3
        ]);
        Faq::create([
            'question' => "Proposez-vous des formations ou un accompagnement ?",
            'answer' => "Oui, en plus des services financiers, nous offrons à nos membres des sessions de formation en éducation financière, en gestion de petite entreprise et en développement de compétences pour assurer le succès de leurs projets.",
            'display_order' => 4
        ]);

        // Contact Details
        ContactDetail::create([
            'phone' => '+243 975 391 220',
            'email' => 'contact@maishaboraasbl.com',
            'address' => "Avenue Patrice Lumumba, <br> Bukavu, R.D. Congo"
        ]);
    
            
        PricingPlan::create([
            'name' => 'Crédit de Groupe',
            'description' => 'Optimisez les opérations financières de votre groupe avec nos plans adaptés.',
            'price_string' => 'À partir de 500',
            'button_text' => 'Postuler',
            'button_link' => '#',
            'is_popular' => true,
            'features' => json_encode([
                'Conseils et rapports financiers personnalisés',
                'Support client prioritaire',
                'Accès à des formations exclusives',
                "Recommandations financières basées sur l'IA"
            ]),
            'display_order' => 2
        ]);

        // How It Works Steps
        HowItWorksStep::create([
            'step_number' => 1,
            'title' => 'Demande de crédit',
            'description' => "Visitez notre agence ou contactez-nous pour remplir un formulaire de demande de crédit."
        ]);
        HowItWorksStep::create([
            'step_number' => 2,
            'title' => 'Analyse du dossier',
            'description' => "Nous analysons votre demande et votre projet pour vous proposer la meilleure solution."
        ]);
        HowItWorksStep::create([
            'step_number' => 3,
            'title' => 'Déboursement',
            'description' => "Une fois votre dossier approuvé, les fonds sont décaissés rapidement sur votre compte."
        ]);
        HowItWorksStep::create([
            'step_number' => 4,
            'title' => 'Remboursement',
            'description' => "Remboursez votre crédit selon les modalités convenues et faites croître votre activité."
        ]);

        // Stats
        Stat::create([
            'end_value' => 10,
            'suffix' => 'K+',
            'label' => 'Satisfaction Client',
            'display_order' => 1
        ]);
        Stat::create([
            'end_value' => 200,
            'suffix' => '%+',
            'label' => 'Augmentation des revenus',
            'display_order' => 2
        ]);
        Stat::create([
            'end_value' => 20,
            'suffix' => 'x',
            'label' => 'Croissance des entreprises',
            'display_order' => 3
        ]);

        // Services
        Service::create([
            'icon' => 'bi bi-cash-coin',
            'title' => 'Microcrédit',
            'description' => "Des prêts adaptés aux besoins des petits entrepreneurs pour démarrer ou développer leurs activités.",
            'link' => '#',
            'display_order' => 1
        ]);
        Service::create([
            'icon' => 'bi bi-wallet2',
            'title' => 'Épargne',
            'description' => "Des solutions d'épargne flexibles et sécurisées pour vous aider à atteindre vos objectifs financiers.",
            'link' => '#',
            'display_order' => 2
        ]);
        Service::create([
            'icon' => 'bi bi-book',
            'title' => 'Formation Financière',
            'description' => "Des ateliers et des formations pour renforcer vos compétences en gestion financière et entrepreneuriale.",
            'link' => '#',
            'display_order' => 3
        ]);

        // Testimonials
        Testimonial::create([
            'quote' => "Cette plateforme a complètement transformé la façon dont je gère les finances de mon entreprise. Le suivi des transactions en temps réel et les options de paiement transparentes m'ont fait gagner tellement de temps et d'efforts !",
            'author_image_path' => 'assets/images/person-sq-2-min.jpg',
            'author_name' => 'Jean-Pierre Kasongo',
            'author_title' => 'Commerçant',
            'display_order' => 1
        ]);
        Testimonial::create([
            'quote' => "En tant que couturière, la gestion de mes finances peut être écrasante. Les outils de budgétisation et les conseils personnalisés m'ont permis de mieux suivre mes dépenses et de planifier l'avenir de mon atelier.",
            'author_image_path' => 'assets/images/person-sq-1-min.jpg',
            'author_name' => 'Marie-Claire Mbuyi',
            'author_title' => 'Artisane',
            'display_order' => 2
        ]);
        Testimonial::create([
            'quote' => "Les options de crédit de groupe sont fantastiques. Travailler avec d'autres membres de ma communauté nous a permis de mettre en commun nos ressources et d'investir dans des projets plus importants. Les recommandations de Maisha Bora sont toujours pertinentes et nous aident à faire croître nos entreprises.",
            'author_image_path' => 'assets/images/person-sq-5-min.jpg',
            'author_name' => 'Alain Ngoy',
            'author_title' => 'Agriculteur',
            'display_order' => 3
        ]);

        // FAQs
        Faq::create([
            'question' => "Qui peut bénéficier d'un crédit chez Maisha Bora Asbl ?",
            'answer' => "Nos services s'adressent principalement aux petits entrepreneurs, aux commerçants, aux artisans, aux femmes et aux jeunes de Bukavu qui ont une activité génératrice de revenus. Il faut être majeur et résider dans notre zone d'intervention.",
            'is_open_by_default' => true,
            'display_order' => 1
        ]);
        Faq::create([
            'question' => "Quels sont les documents requis pour une demande de crédit ?",
            'answer' => "Pour une première demande, vous aurez généralement besoin d'une pièce d'identité valide, d'un justificatif de domicile, et d'une preuve de votre activité économique. Les exigences peuvent varier en fonction du type et du montant du crédit demandé.",
            'display_order' => 2
        ]);
        Faq::create([
            'question' => "Combien de temps faut-il pour obtenir un prêt ?",
            'answer' => "Nous nous efforçons de traiter les demandes le plus rapidement possible. En général, après soumission d'un dossier complet, le processus d'analyse et de déboursement des fonds peut prendre entre 7 et 14 jours ouvrables.",
            'display_order' => 3
        ]);
        Faq::create([
            'question' => "Proposez-vous des formations ou un accompagnement ?",
            'answer' => "Oui, en plus des services financiers, nous offrons à nos membres des sessions de formation en éducation financière, en gestion de petite entreprise et en développement de compétences pour assurer le succès de leurs projets.",
            'display_order' => 4
        ]);

        // Contact Details
        ContactDetail::create([
            'phone' => '+243 975 391 220',
            'email' => 'contact@maishaboraasbl.com',
            'address' => "Avenue Patrice Lumumba, <br> Bukavu, R.D. Congo"
        ]);

        // How It Works Steps
        HowItWorksStep::create([
            'step_number' => 1,
            'title' => 'Demande de crédit',
            'description' => "Visitez notre agence ou contactez-nous pour remplir un formulaire de demande de crédit."
        ]);
        HowItWorksStep::create([
            'step_number' => 2,
            'title' => 'Analyse du dossier',
            'description' => "Nous analysons votre demande et votre projet pour vous proposer la meilleure solution."
        ]);
        HowItWorksStep::create([
            'step_number' => 3,
            'title' => 'Déboursement',
            'description' => "Une fois votre dossier approuvé, les fonds sont décaissés rapidement sur votre compte."
        ]);
        HowItWorksStep::create([
            'step_number' => 4,
            'title' => 'Remboursement',
            'description' => "Remboursez votre crédit selon les modalités convenues et faites croître votre activité."
        ]);

        // Stats
        Stat::create([
            'end_value' => 10,
            'suffix' => 'K+',
            'label' => 'Satisfaction Client',
            'display_order' => 1
        ]);
        Stat::create([
            'end_value' => 200,
            'suffix' => '%+',
            'label' => 'Augmentation des revenus',
            'display_order' => 2
        ]);
        Stat::create([
            'end_value' => 20,
            'suffix' => 'x',
            'label' => 'Croissance des entreprises',
            'display_order' => 3
        ]);

        // Services
        Service::create([
            'icon' => 'bi bi-cash-coin',
            'title' => 'Microcrédit',
            'description' => "Des prêts adaptés aux besoins des petits entrepreneurs pour démarrer ou développer leurs activités.",
            'link' => '#',
            'display_order' => 1
        ]);
        Service::create([
            'icon' => 'bi bi-wallet2',
            'title' => 'Épargne',
            'description' => "Des solutions d'épargne flexibles et sécurisées pour vous aider à atteindre vos objectifs financiers.",
            'link' => '#',
            'display_order' => 2
        ]);
        Service::create([
            'icon' => 'bi bi-book',
            'title' => 'Formation Financière',
            'description' => "Des ateliers et des formations pour renforcer vos compétences en gestion financière et entrepreneuriale.",
            'link' => '#',
            'display_order' => 3
        ]);

        // Testimonials
        Testimonial::create([
            'quote' => "Cette plateforme a complètement transformé la façon dont je gère les finances de mon entreprise. Le suivi des transactions en temps réel et les options de paiement transparentes m'ont fait gagner tellement de temps et d'efforts !",
            'author_image_path' => 'assets/images/person-sq-2-min.jpg',
            'author_name' => 'Jean-Pierre Kasongo',
            'author_title' => 'Commerçant',
            'display_order' => 1
        ]);
        Testimonial::create([
            'quote' => "En tant que couturière, la gestion de mes finances peut être écrasante. Les outils de budgétisation et les conseils personnalisés m'ont permis de mieux suivre mes dépenses et de planifier l'avenir de mon atelier.",
            'author_image_path' => 'assets/images/person-sq-1-min.jpg',
            'author_name' => 'Marie-Claire Mbuyi',
            'author_title' => 'Artisane',
            'display_order' => 2
        ]);
        Testimonial::create([
            'quote' => "Les options de crédit de groupe sont fantastiques. Travailler avec d'autres membres de ma communauté nous a permis de mettre en commun nos ressources et d'investir dans des projets plus importants. Les recommandations de Maisha Bora sont toujours pertinentes et nous aident à faire croître nos entreprises.",
            'author_image_path' => 'assets/images/person-sq-5-min.jpg',
            'author_name' => 'Alain Ngoy',
            'author_title' => 'Agriculteur',
            'display_order' => 3
        ]);

        // FAQs
        Faq::create([
            'question' => "Qui peut bénéficier d'un crédit chez Maisha Bora Asbl ?",
            'answer' => "Nos services s'adressent principalement aux petits entrepreneurs, aux commerçants, aux artisans, aux femmes et aux jeunes de Bukavu qui ont une activité génératrice de revenus. Il faut être majeur et résider dans notre zone d'intervention.",
            'is_open_by_default' => true,
            'display_order' => 1
        ]);
        Faq::create([
            'question' => "Quels sont les documents requis pour une demande de crédit ?",
            'answer' => "Pour une première demande, vous aurez généralement besoin d'une pièce d'identité valide, d'un justificatif de domicile, et d'une preuve de votre activité économique. Les exigences peuvent varier en fonction du type et du montant du crédit demandé.",
            'display_order' => 2
        ]);
        Faq::create([
            'question' => "Combien de temps faut-il pour obtenir un prêt ?",
            'answer' => "Nous nous efforçons de traiter les demandes le plus rapidement possible. En général, après soumission d'un dossier complet, le processus d'analyse et de déboursement des fonds peut prendre entre 7 et 14 jours ouvrables.",
            'display_order' => 3
        ]);
        Faq::create([
            'question' => "Proposez-vous des formations ou un accompagnement ?",
            'answer' => "Oui, en plus des services financiers, nous offrons à nos membres des sessions de formation en éducation financière, en gestion de petite entreprise et en développement de compétences pour assurer le succès de leurs projets.",
            'display_order' => 4
        ]);

        // Contact Details
        ContactDetail::create([
            'phone' => '+243 975 391 220',
            'email' => 'contact@maishaboraasbl.com',
            'address' => "Avenue Patrice Lumumba, <br> Bukavu, R.D. Congo"
        ]);
    }
}
