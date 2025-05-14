<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Quiz Tingkat Stress - Mental Care</title>

  <link rel="icon" href="{{ asset('assets/img/logo (2).png') }}" type="image/webp">
  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    .quiz-header {
      background: linear-gradient(135deg, #4CAF50, #81C784);
      color: white;
      padding: 3rem 0;
      margin-bottom: 2rem;
      text-align: center;
    }
    
    .quiz-container {
      background: #f8f9fa;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      max-width: 800px;
      margin: auto;
    }

    .question {
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .question p {
      font-weight: 600;
      color: #2c3e50;
    }

    .options label {
      display: block;
      margin: 10px 0;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .options label:hover {
      background: #e8f0ff;
    }

    .result-box {
      margin-top: 30px;
      background: #e8f0ff;
      border-left: 5px solid #4b79cf;
      padding: 2rem;
      border-radius: 8px;
      display: none;
    }

    .stress-meter {
      height: 20px;
      background: #e0e0e0;
      border-radius: 10px;
      margin: 15px 0;
      overflow: hidden;
    }

    .stress-level {
      height: 100%;
      background: linear-gradient(to right, #81C784, #FFD54F, #E57373);
      width: 0%;
      transition: width 1s;
    }

    .btn-submit {
      background: #4CAF50;
      border: none;
      padding: 12px 30px;
      font-size: 1.1rem;
    }

    .btn-submit:hover {
      background: #3d8b40;
    }
  </style>
</head>
<body>
  @include('home.header')

  <div class="quiz-header">
    <div class="container">
      <h1><i class="fas fa-brain"></i> Tes Tingkat Stress</h1>
      <p class="lead">Isi kuis berikut untuk mengevaluasi tingkat stress Anda</p>
    </div>
  </div>
    

  <div class="container mb-5">
    <div class="quiz-container">

        <div class="disclaimer-box container mb-5">
        <h5><i class="fas fa-exclamation-triangle text-warning me-2"></i>Penting!</h5>
        <p class="mb-0">
          <strong>Skala ini tidak dipakai untuk diagnosis medis.</strong> Hasil kuis ini hanya memberikan gambaran umum 
          tentang tingkat stress Anda. Untuk penilaian yang akurat dan profesional, silakan berkonsultasi dengan 
          psikolog atau psikiater.
        </p>
      </div>
      <form id="stressQuiz">
        <!-- Pertanyaan 1 -->
        <div class="question">
          <p><strong>1. Seberapa sering Anda merasa gelisah atau khawatir dalam seminggu terakhir?</strong></p>
          <div class="options">
            <label><input type="radio" name="q1" value="0"> Tidak pernah</label>
            <label><input type="radio" name="q1" value="1"> Kadang-kadang (1-2 hari)</label>
            <label><input type="radio" name="q1" value="2"> Sering (3-4 hari)</label>
            <label><input type="radio" name="q1" value="3"> Hampir setiap hari</label>
          </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="question">
          <p><strong>2. Bagaimana kualitas tidur Anda akhir-akhir ini?</strong></p>
          <div class="options">
            <label><input type="radio" name="q2" value="0"> Tidur nyenyak seperti biasa</label>
            <label><input type="radio" name="q2" value="1"> Kadang sulit tidur</label>
            <label><input type="radio" name="q2" value="2"> Sering terbangun/tidur tidak nyenyak</label>
            <label><input type="radio" name="q2" value="3"> Hampir setiap malam sulit tidur</label>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="question">
          <p><strong>3. Seberapa mudah Anda merasa lelah?</strong></p>
          <div class="options">
            <label><input type="radio" name="q3" value="0"> Energi normal seperti biasa</label>
            <label><input type="radio" name="q3" value="1"> Kadang merasa lelah</label>
            <label><input type="radio" name="q3" value="2"> Sering merasa lelah</label>
            <label><input type="radio" name="q3" value="3"> Selalu merasa kelelahan</label>
          </div>
        </div>

        <!-- Pertanyaan 4 -->
        <div class="question">
          <p><strong>4. Bagaimana nafsu makan Anda belakangan ini?</strong></p>
          <div class="options">
            <label><input type="radio" name="q4" value="0"> Normal seperti biasa</label>
            <label><input type="radio" name="q4" value="1"> Kadang makan lebih banyak/sedikit</label>
            <label><input type="radio" name="q4" value="2"> Sering makan berlebihan/kehilangan nafsu makan</label>
            <label><input type="radio" name="q4" value="3"> Selalu tidak bisa mengontrol nafsu makan</label>
          </div>
        </div>

        <!-- Pertanyaan 5 -->
        <div class="question">
          <p><strong>5. Seberapa sering Anda mengalami gejala fisik seperti sakit kepala, sakit perut, atau nyeri otot?</strong></p>
          <div class="options">
            <label><input type="radio" name="q5" value="0"> Hampir tidak pernah</label>
            <label><input type="radio" name="q5" value="1"> Kadang-kadang</label>
            <label><input type="radio" name="q5" value="2"> Sering</label>
            <label><input type="radio" name="q5" value="3"> Hampir setiap hari</label>
          </div>
        </div>

        <div class="text-center">
          <button type="button" class="btn btn-submit text-white" onclick="calculateStress()">
            <i class="fas fa-chart-bar me-2"></i> Lihat Hasil
          </button>
        </div>
      </form>

      <div class="result-box" id="resultBox">
        
        <h4><i class="fas fa-poll me-2"></i> Hasil Tes Stress Anda</h4>
        <p class="mb-0">
            <i class="fas fa-info-circle text-primary me-2 text-muted"></i>
            Hasil ini bersifat informatif dan tidak menggantikan diagnosis profesional.
          </p>
        <div class="stress-meter">
          <div class="stress-level" id="stressMeter"></div>
        </div>
        <div id="stressResult"></div>
        <div id="stressRecommendation" class="mt-3"></div>
        
        <div class="text-center mt-4">
          <a href="{{ route('home') }}#appointment" class="btn btn-success">
            <i class="mai mai-calendar-check me-2"></i> Konsultasi dengan Profesional
          </a>
        </div>
      </div>
    </div>
  </div>

  @include('home.footer')

  <!-- JS -->
  <script>
    function calculateStress() {
      let totalScore = 0;
      const questions = 5;
      
      // Hitung skor
      for(let i = 1; i <= questions; i++) {
        const selected = document.querySelector(`input[name="q${i}"]:checked`);
        if(selected) {
          totalScore += parseInt(selected.value);
        }
      }
      
      // Hitung persentase
      const maxScore = questions * 3;
      const percentage = Math.round((totalScore / maxScore) * 100);
      
      // Tampilkan hasil
      const resultBox = document.getElementById('resultBox');
      const stressMeter = document.getElementById('stressMeter');
      const stressResult = document.getElementById('stressResult');
      const stressRecommendation = document.getElementById('stressRecommendation');
      
      stressMeter.style.width = `${percentage}%`;
      resultBox.style.display = 'block';
      
      // Hasil berdasarkan skor
      if(totalScore <= 5) {
        stressResult.innerHTML = `
          <h5 class="text-success"><i class="fas fa-smile me-2"></i> Tingkat Stress: Rendah (${totalScore}/${maxScore})</h5>
          <p>Anda tampaknya mengelola stress dengan cukup baik. Pertahankan gaya hidup sehat!</p>
        `;
      } 
      else if(totalScore <= 10) {
        stressResult.innerHTML = `
          <h5 class="text-warning"><i class="fas fa-meh me-2"></i> Tingkat Stress: Sedang (${totalScore}/${maxScore})</h5>
          <p>Anda menunjukkan beberapa tanda stress. Mulailah mencari cara untuk relaksasi.</p>
        `;
      }
      else {
        stressResult.innerHTML = `
          <h5 class="text-danger"><i class="fas fa-frown me-2"></i> Tingkat Stress: Tinggi (${totalScore}/${maxScore})</h5>
          <p>Anda mengalami tingkat stress yang signifikan. Pertimbangkan untuk mencari bantuan profesional.</p>
        `;
      }
      
      // Rekomendasi umum
      stressRecommendation.innerHTML = `
        <div class="alert alert-info">
          <h6><i class="fas fa-lightbulb me-2"></i>Tips Mengurangi Stress:</h6>
          <ul>
            <li>Lakukan relaksasi atau meditasi 10 menit sehari</li>
            <li>Olahraga teratur minimal 30 menit</li>
            <li>Jaga pola tidur yang teratur</li>
            <li>Bicarakan perasaan dengan orang terdekat</li>
          </ul>
        </div>
      `;
      
      // Scroll ke hasil
      resultBox.scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>
</html>