@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #4338ca;
        --bg: #f8fafc;
        --card-bg: rgba(255, 255, 255, 0.9);
    }

    .veille-header {
        padding: 80px 20px 40px;
        background: linear-gradient(135deg, #eef2ff 0%, #f8fafc 100%);
        text-align: center;
    }

    .container { max-width: 1100px; margin: 0 auto; padding: 40px 20px; }

    .tool-badge {
        display: inline-flex;
        align-items: center;
        background: white;
        padding: 10px 20px;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        margin: 10px;
        font-weight: 600;
        color: var(--primary);
    }

    .veille-card {
        background: var(--card-bg);
        border: 1px solid #e2e8f0;
        border-radius: 24px;
        padding: 40px;
        margin-bottom: 40px;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);
    }

    .subject-title {
        color: var(--primary);
        font-size: 1.8rem;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .article-link {
        display: block;
        padding: 15px;
        background: #f1f5f9;
        border-radius: 12px;
        margin-top: 15px;
        text-decoration: none;
        color: #1e293b;
        transition: 0.3s;
        border-left: 4px solid var(--primary);
    }

    .article-link:hover { background: #e2e8f0; transform: translateX(5px); }
</style>

<div class="veille-header">
    <h1 style="font-size: 3rem; font-weight: 800; color: #0f172a;">Veille Technologique</h1>
    <p style="color: #64748b; font-size: 1.2rem; max-width: 700px; margin: 20px auto;">
        Comment je me tiens informé des dernières évolutions du monde numérique pour rester performant.
    </p>
    
    <div style="margin-top: 30px;">
        <span class="tool-badge">🔍 Feedly</span>
        <span class="tool-badge">🐦 Twitter / X</span>
        <span class="tool-badge">💻 GitHub Trend</span>
        <span class="tool-badge">📧 Newsletters (Bento)</span>
    </div>
</div>

<div class="container">
    <div class="veille-card">
        <h2 class="subject-title">🤖 Intelligence Artificielle & Développement</h2>
        <p>Ma veille se concentre sur l'intégration des LLM dans le workflow de développement (Copilot, agents autonomes) et l'évolution des outils de génération de code.</p>
        
        <h3 style="margin-top: 25px;">Articles & Ressources clés :</h3>
        <a href="#" class="article-link">
            <strong>L'évolution de Laravel avec les outils IA</strong>
            <span style="display:block; font-size: 0.8rem; color: #64748b;">Source : Laravel News</span>
        </a>
        <a href="#" class="article-link">
            <strong>Les enjeux de la cybersécurité dans l'IA</strong>
            <span style="display:block; font-size: 0.8rem; color: #64748b;">Source : Le Monde Informatique</span>
        </a>
    </div>

    <div class="veille-card">
        <h2 class="subject-title">🛡️ Cybersécurité & Web</h2>
        <p>Suivi des vulnérabilités critiques (OWASP) et des nouvelles méthodes d'authentification sécurisées pour les applications Laravel.</p>
        
        <h3 style="margin-top: 25px;">Derniers points surveillés :</h3>
        <ul style="color: #475569; line-height: 2;">
            <li>Mise en place du Passwordless avec WebAuthn</li>
            <li>Protection contre les attaques par injection de prompts</li>
            <li>Évolution des normes RGPD sur le stockage des données</li>
        </ul>
    </div>
</div>
@endsection