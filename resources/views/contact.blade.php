@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #4338ca;
        --primary-hover: #3730a3;
        --bg: #f8fafc;
        --text-main: #1e293b;
        --card-bg: #ffffff;
    }

    .contact-header {
        padding: 80px 20px 40px;
        background: linear-gradient(135deg, #eef2ff 0%, #f8fafc 100%);
        text-align: center;
    }

    .container { max-width: 1000px; margin: 0 auto; padding: 40px 20px; }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 40px;
        margin-top: 20px;
    }

    /* Carte Infos & LinkedIn */
    .info-card {
        background: var(--primary);
        color: white;
        padding: 40px;
        border-radius: 24px;
        box-shadow: 0 10px 15px -3px rgba(67, 56, 202, 0.2);
    }

    .info-card h2 { font-size: 1.8rem; margin-bottom: 20px; }
    .info-card p { opacity: 0.9; margin-bottom: 30px; }

    .social-link {
        display: flex;
        align-items: center;
        gap: 15px;
        background: rgba(255, 255, 255, 0.1);
        padding: 15px;
        border-radius: 12px;
        text-decoration: none;
        color: white;
        font-weight: 600;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .social-link:hover {
        background: white;
        color: var(--primary);
        transform: translateY(-3px);
    }

    /* Formulaire */
    .form-card {
        background: white;
        padding: 40px;
        border-radius: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #475569; }
    
    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-family: inherit;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(67, 56, 202, 0.1);
    }

    .btn-send {
        background: var(--primary);
        color: white;
        border: none;
        padding: 14px 28px;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
    }

    .btn-send:hover { background: var(--primary-hover); transform: translateY(-2px); }

    @media (max-width: 768px) {
        .contact-grid { grid-template-columns: 1fr; }
    }
</style>

<div class="contact-header">
    <h1 style="font-size: 3rem; font-weight: 800; color: #0f172a;">Parlons de votre projet</h1>
    <p style="color: #64748b; font-size: 1.1rem;">Disponible pour une alternance ou des missions en freelance.</p>
</div>

<div class="container">
    <div class="contact-grid">
        <div class="info-card">
            <h2>Mes coordonnées</h2>
            <p>N'hésitez pas à me contacter via le formulaire ou directement sur mes réseaux professionnels.</p>
            
            <div style="margin-bottom: 40px;">
                <div style="margin-bottom: 15px;">📍 Vitry-sur-Seine, France</div>
                <div style="margin-bottom: 15px;">✉️ ilyassgourmat@outlook.fr</div>
                <div>📞 07 49 86 17 18</div>
            </div>

            <a href="https://www.linkedin.com/in/ilyass-gourmat-b88243333/" target="_blank" class="social-link">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" width="24" style="filter: brightness(0) invert(1);">
                Mon Profil LinkedIn
            </a>
        </div>

        <div class="form-card">
            <form action="#" method="POST">
                @csrf
                @if(session('success'))
                    <div style="background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif  
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="nom@exemple.com" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" class="form-control" placeholder="Comment puis-je vous aider ?" required></textarea>
                </div>

                <button type="submit" class="btn-send">Envoyer le message</button>
            </form>
        </div>
    </div>
</div>
@endsection