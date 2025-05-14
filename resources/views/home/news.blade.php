<div id="resources" class="page-section bg-light">
    <div class="container">
        <h1 class="text-center mb-5">Mental Health Resources</h1>
        
        <div class="row">
            <!-- Artikel 1: Perbedaan Psikolog dan Psikiater -->
            <div class="col-md-6 mb-4">
                <div class="card mental-health-card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Understanding Mental Health Professionals</h5>
                    </div>
                    <img src="../assets/img/img.jpeg" class="card-img-top" alt="Psikolog dan Psikiater" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">Psikolog vs Psikiater: Apa Bedanya?</h3>
                        <p class="card-text">Temukan perbedaan mendasar antara psikolog dan psikiater, kapan harus berkonsultasi dengan masing-masing profesional, dan bagaimana mereka dapat membantu kesehatan mental Anda.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <span class="text-muted"><i class="mai mai-time"></i> 5 min read</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ url('/article') }}" class="btn btn-outline-primary btn-block">Read Article</a>
                    </div>
                </div>
            </div>
            
            <!-- Artikel 2: Quiz Tingkat Stress -->
            <div class="col-md-6 mb-4">
                <div class="card mental-health-card h-100 border-0 shadow-sm">
                    <div class="card-header bg-success text-dark">
                        <h5 class="mb-0">Self-Assessment Tool</h5>
                    </div>
                    <img src="{{ asset('assets/img/quiz.webp') }}" class="card-img-top" alt="Stress Test" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">Quiz: Seberapa Tinggi Tingkat Stress Anda?</h3>
                        <p class="card-text">Ikuti quiz singkat ini untuk mengevaluasi tingkat stress Anda. Hasilnya akan memberikan rekomendasi apakah Anda perlu mencari bantuan profesional.</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">70% pengguna merasa quiz ini membantu</small>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ url('/quiz') }}" class="btn btn-success btn-block text-dark">Take the Quiz Now</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<style>
    .mental-health-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .mental-health-card:hover {
        transform: translateY(-5px);
    }
    
    .card-header {
        font-weight: 600;
        border-bottom: none;
    }
    
    .progress {
        height: 8px;
        border-radius: 4px;
    }
</style>