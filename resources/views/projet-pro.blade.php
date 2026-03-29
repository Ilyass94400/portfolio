@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: 50px auto; padding: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333;">
    
    <h1 style="color: #4338ca; border-bottom: 3px solid #4338ca; padding-bottom: 10px;">Mon Projet Professionnel</h1>

    <section style="margin-top: 30px;">
        <h2 style="color: #1e293b;">🎓 Poursuite d'études : Vers l'expertise</h2>
        <p>
            Actuellement en fin de cycle BTS SIO (Services Informatiques aux Organisations), mon objectif immédiat est d'approfondir mes compétences techniques en intégrant un Master spécialisé. 
        </p>
        <p>
            Je souhaite m'orienter vers un cursus en alternance, car je suis convaincu que la théorie du Master alliée à la pratique en entreprise est la clé pour devenir un ingénieur performant.
        </p>
    </section>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
        <div style="background: #f8fafc; padding: 20px; border-radius: 10px; border-left: 5px solid #3b82f6;">
            <h3>🌐 Web Développement</h3>
            <p>Maîtriser les architectures complexes (Micro-services), les frameworks modernes et l'optimisation des performances pour créer des applications web scalables et sécurisées.</p>
        </div>
        <div style="background: #f8fafc; padding: 20px; border-radius: 10px; border-left: 5px solid #10b981;">
            <h3>☁️ Cloud Computing</h3>
            <p>Comprendre et gérer les infrastructures cloud (AWS, Azure). Mon but est de savoir déployer des solutions hautement disponibles et d'automatiser les processus (DevOps).</p>
        </div>
    </div>

    <section style="margin-top: 40px; background: #4338ca; color: white; padding: 25px; border-radius: 15px;">
        <h2>🚀 Vision à long terme</h2>
        <p>
            À l'issue de mon Master, j'ambitionne d'occuper un poste de Développeur Fullstack ou d'Architecte Cloud. Je ne veux pas seulement "coder", mais concevoir des systèmes entiers qui répondent à des problématiques réelles.
        </p>
        <p>
            Mon rêve serait de contribuer à des projets d'envergure internationale, où l'innovation technologique permet de simplifier le quotidien de milliers d'utilisateurs.
        </p>
    </section>

    <div style="margin-top: 30px; text-align: center;">
        <a href="{{ route('contact') }}" style="background: #4338ca; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold;">Discutons de mon profil</a>
    </div>

</div>
@endsection