@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #4f46e5;
        --primary-light: #e0e7ff;
        --bg: #f8fafc;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --card-bg: rgba(255, 255, 255, 0.8);
    }

    .portfolio-wrapper { background-color: var(--bg); color: var(--text-main); line-height: 1.6; }
    
    /* Hero Section Moderne */
    .hero-v2 {
        padding: 100px 20px;
        background: radial-gradient(circle at top right, #e0e7ff 0%, #f8fafc 50%);
        text-align: center;
    }
    .hero-v2 h1 { font-size: 4rem; font-weight: 800; letter-spacing: -2px; margin: 0; background: linear-gradient(to right, #4338ca, #6366f1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .hero-v2 .subtitle { font-size: 1.5rem; color: var(--text-muted); margin-top: 10px; font-weight: 500; }
    
    .container { max-width: 1100px; margin: 0 auto; padding: 40px 20px; }

    /* Cartes de Projets/Expériences */
    .section-header { margin-bottom: 40px; }
    .section-header h2 { font-size: 2rem; font-weight: 700; position: relative; display: inline-block; }
    .section-header h2::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 40%; height: 4px; background: var(--primary); border-radius: 2px; }

    .experience-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
    
    .exp-card {
        background: var(--card-bg);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        padding: 30px;
        border-radius: 24px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    .exp-card:hover { transform: translateY(-10px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); border-color: var(--primary); }
    
    .exp-card .company { font-weight: 700; color: var(--primary); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; }
    .exp-card h3 { margin: 10px 0; font-size: 1.4rem; }
    .exp-card .date-badge { display: inline-block; padding: 4px 12px; background: var(--primary-light); color: var(--primary); border-radius: 8px; font-size: 0.8rem; font-weight: 600; margin-bottom: 15px; }
    
    .exp-card ul { padding-left: 18px; margin: 0; color: var(--text-muted); }
    .exp-card li { margin-bottom: 8px; }

    /* Compétences */
    .skills-section { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 60px; }
    .skill-tag { display: inline-block; background: white; border: 1px solid #e2e8f0; padding: 8px 16px; border-radius: 12px; margin: 5px; font-weight: 500; transition: 0.2s; }
    .skill-tag:hover { background: var(--primary); color: white; border-color: var(--primary); }

    @media (max-width: 768px) {
        .hero-v2 h1 { font-size: 2.5rem; }
        .skills-section { grid-template-columns: 1fr; }
    }
</style>

<div class="portfolio-wrapper">
    <section class="hero-v2">
        <h1>{{ 'Ilyass GOURMAT' }}</h1> <p class="subtitle">Recherche alternance en développement informatique</p> <div style="margin-top: 30px;">
            <a href="mailto:ilyassgourmat@outlook.fr" style="text-decoration: none; color: var(--text-muted); margin: 0 15px;">✉️ Email</a> <a href="tel:0749861718" style="text-decoration: none; color: var(--text-muted); margin: 0 15px;">📞 Numéro</a> </div>
    </section>

    <div class="container">
        <section id="projets">
            <div class="section-header">
                <h2>Expériences Professionnelles</h2> </div>
            
            <div class="experience-grid">
                <article class="exp-card">
                    <span class="company">L.D.A 91</span> <h3>Développeur Web</h3>
                    <span class="date-badge">Depuis Février 2026</span> <ul>
                        <li>Développement et maintenance du site web</li>
                        <li>Gestion d'un catalogue de +1000 produits</li>
                    </ul>
                </article>

                <article class="exp-card">
                    <span class="company">L.D.A 91</span> <h3>Stage Développeur</h3>
                    <span class="date-badge">Janvier - Février 2026</span> <ul>
                        <li>Développement d'une application web</li>
                        <li>Création d'outils d'optimisation</li>
                        <li>Gestion de base de données</li>
                    </ul>
                </article>

                <article class="exp-card">
                    <span class="company">Locarcade</span> <h3>Stage Développeur</h3>
                    <span class="date-badge">Mai - Juillet 2025</span> <ul>
                        <li>Maintenance et correction d'erreurs</li>
                        <li>Sécurisation du site et gestion de base de données</li>
                    </ul>
                </article>
            </div>
        </section>

        <div class="skills-section">
            <section>
                <div class="section-header">
                    <h2>Soft Skills</h2> </div>
                <div class="skill-tags">
                    <span class="skill-tag">Adaptation</span> <span class="skill-tag">Travail d'équipe</span> <span class="skill-tag">Autonomie</span> <span class="skill-tag">Organisation</span> </div>
            </section>

            <section>
                <div class="section-header">
                    <h2>Langues</h2> </div>
                <div class="exp-card" style="padding: 20px;">
                    <p><strong>Français :</strong> Natif</p>
                    <p><strong>Anglais :</strong> Niveau B2</p>
                    <p><strong>Arabe :</strong> Niveau B1</p>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection