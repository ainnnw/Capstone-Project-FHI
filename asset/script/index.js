/*humberger bottom*/

function showMenu() {
    var x = document.getElementById('hamburger').innerHTML;
    console.log(x);
    if (x == "-") {
      console.log("close");
      document.getElementById('hamburger').innerHTML = "&#8801;";
      document.getElementById('menu_vertikal').style.display = "none";
    } else {
      console.log("hamburger");
      document.getElementById('hamburger').innerHTML = "-";
      document.getElementById('menu_vertikal').style.display = "block";
    }
  }

/*animate slider*/
AOS.init(
    {
    disable: false,
    startEvent: 'DOMContentLoaded',
    initClassName: 'aos-init',
    animatedClassName: 'aos-animate',
    useClassNames: false,
    disableMutationObserver: false,
    debounceDelay: 50,
    throttleDelay: 99,

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 300,
    delay: 3,
    duration: 2000,
    easing: 'ease',
    once: false,
    mirror: false,
    anchorPlacement: 'top-bottom',

  });

/*back to top*/
// Get the button
let mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 3000 || document.documentElement.scrollTop > 3000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//bmi//
function displayBmi(a, b, c){
    if (a == 0 || b == 0) {
        alert("Anda belum memasukkan berat badan atau tinggi badan");
      }else{
        const displayContentBmi = document.getElementById('display-content-bmi');
        const displayContentBbi = document.getElementById('display-content-bbi');
        const displayContentAboutBmi = document.getElementById('display-content-aboutBmi');
        const tbbb = document.getElementById('tbbb');
  
        let bmiContent = "";
        let bbiContent = "";
        let aboutBmiContent = "";
        let isiTbBB = "";
  
        let tbs = a.split("");
        let tbsg = tbs[0] + "." + tbs[1]  + tbs[2];
        let tb = tbsg ** 2;
        let tbf = tb.toFixed(2);
        let hasil = b / tbf;
        let hasilf = hasil.toFixed(1);
  
        if(hasilf < 18.5){
          document.getElementById('display-content-bbi-none').classList.remove("d-none");
          isiTbBB = `<p>Jika Tinggi Badan anda <b>${a} Cm</b> dan Berat Badan <b>${b} Kg</b> maka : </p>`;
          bmiContent = `<div class="card bg-info">`+
                          `<div class="card-header">BMI anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${hasilf}</h1>`+
                            `<p class="card-text text-center">Underweight</p>`+
                        `</div>`+
                       `</div>`;
          bbiContent = `<div class="card bg-light">`+
                          `<div class="card-header">BBI untuk anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${c} Kg</h1>`+
                          `</div>`+
                       `</div>`;
          aboutBmiContent = `<p>Anda dapat dikatakan memiliki berat badan kurang atau underweight karena angka BMI Anda kurang dari angka 18,5. Berat badan kurang bukanlah kondisi yang sehat.</p>`+
                            `<p>Kondisi ini dapat meningkatkan risiko Anda untuk mengalami beberapa masalah kesehatan, seperti sistem kekebalan tubuh lemah, tulang menjadi rapuh, sulit memperoleh keturunan atau infertilitas, hingga kurang gizi.</p>`+
                            `<p>Kami merekomendasikan anda untuk menaikkan berat badan Anda hingga ${c} Kg.</p>`+
                            `<p>Untuk meningkatkan berat badan agar lebih ideal, Anda perlu menyiasatinya dengan pola makan sehat yang terdiri dari makanan dengan kandungan nutrisi lengkap, seperti karbohidrat, protein, lemak sehat, serta aneka vitamin dan mineral.</p>`+
                            `<p>Anda bisa memenuhi asupan nutrisi tersebut dengan mengonsumsi nasi, buah, sayuran, ikan, telur, kacang-kacangan, dan susu.</p>`+
                            `<a href="../index.html" target="_blank">Baca selangkapnya di sini</a>`;
          tbbb.innerHTML = isiTbBB;
          displayContentBmi.innerHTML = bmiContent;
          displayContentBbi.innerHTML = bbiContent;
          displayContentAboutBmi.innerHTML = aboutBmiContent;
        }else if(hasilf <= 25){
          isiTbBB = `<p>Jika Tinggi Badan anda <b>${a} Cm</b> dan Berat Badan <b>${b} Kg</b> maka : </p>`;
          bmiContent = `<div class="card bg-success">`+
                          `<div class="card-header">BMI anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${hasilf}</h1>`+
                            `<p class="card-text text-center">Normal</p>`+
                        `</div>`+
                       `</div>`;
          aboutBmiContent =`<p>Nilai BMI Anda termasuk pada rentang angka yang disebut berat badan normal atau ideal. Namun, memiliki berat badan ideal bukan berarti Anda bebas melakukan apa pun.</p>`+
                            `<p>Anda tetap dianjurkan untuk menjaga berat badan dan kesehatan tubuh secara keseluruhan dengan mengonsumsi makanan bernutrisi, mencukupi waktu istirahat, melakukan olahraga secara rutin, serta menghindari kebiasaan buruk, seperti merokok atau mengonsumsi minuman beralkohol.</p>`+
                            `<a href="../index.html" target="_blank">Baca selangkapnya di sini</a>`;
          tbbb.innerHTML = isiTbBB;
          displayContentBmi.innerHTML = bmiContent;
          document.getElementById('display-content-bbi-none').classList.add("d-none");
          displayContentAboutBmi.innerHTML = aboutBmiContent;
        }else if(hasilf <= 27){
          isiTbBB = `<p>Jika Tinggi Badan anda <b>${a} Cm</b> dan Berat Badan <b>${b} Kg</b> maka : </p>`;
          document.getElementById('display-content-bbi-none').classList.remove("d-none");
          bmiContent = `<div class="card bg-warning">`+
                          `<div class="card-header">BMI anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${hasilf}</h1>`+
                            `<p class="card-text text-center">Overweight</p>`+
                        `</div>`+
                       `</div>`;
          bbiContent = `<div class="card bg-light">`+
                          `<div class="card-header">BBI untuk anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${c} Kg</h1>`+
                          `</div>`+
                       `</div>`;
          aboutBmiContent = `<p>Bila hasil perhitungan BMI Anda menunjukkan nilai antara 25,1 – 27,0, berarti Anda memiliki berat badan berlebih atau overweight.</p>`+
                            `<p>Kondisi ini juga tidak baik bagi kesehatan karena dapat meningkatkan risiko berbagai penyakit, seperti stroke, diabetes tipe 2, osteoarthritis, dan hipertensi. Sebagai upaya pencegahan, Anda disarankan mengambil langkah untuk mengurangi berat badan.</p>`+
                            `<p>Hal ini bisa dilakukan dengan cara mengurangi asupan makanan yang mengandung gula atau karbohidrat dan kolesterol. Kedua jenis makanan tersebut dapat menyebabkan tubuh menghasilkan banyak jaringan lemak yang dapat memicu peningkatan berat badan.</p>`+
                            `<p>Kami merekomendasikan anda untuk menurunkan berat badan Anda hingga ${c} Kg.</p>`+
                            `<p>Untuk menurunkan berat badan, cobalah mulai memperbanyak asupan protein, seperti ikan, telur, tahu, dan tempe, buah dan sayur, serta dianjurkan untuk minum air 30 menit sebelum makan agar Anda merasa lebih cepat kenyang. Jangan lupa juga untuk rutin berolahraga minimal 20–30 menit setiap hari atau minimal 3 kali seminggu.</p>`+
                            `<a href="../index.html" target="_blank">Baca selangkapnya di sini</a>`;
          tbbb.innerHTML = isiTbBB;
          displayContentBmi.innerHTML = bmiContent;
          displayContentBbi.innerHTML = bbiContent;
          displayContentAboutBmi.innerHTML = aboutBmiContent;
        }else if(hasilf > 27){
          isiTbBB = `<p>Jika Tinggi Badan anda <b>${a} Cm</b> dan Berat Badan <b>${b} Kg</b> maka : </p>`;
          document.getElementById('display-content-bbi-none').classList.remove("d-none");
          bmiContent = `<div class="card bg-danger">`+
                          `<div class="card-header">BMI anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${hasilf}</h1>`+
                            `<p class="card-text text-center">Obesitas</p>`+
                        `</div>`+
                       `</div>`;
          bbiContent = `<div class="card bg-light">`+
                          `<div class="card-header">BBI untuk anda : </div>`+
                          `<div class="card-body">`+
                            `<h1 class="card-title">${c} Kg</h1>`+
                          `</div>`+
                       `</div>`;
          aboutBmiContent = `<p>Jika hasil perhitungan BMI Anda menunjukkan angka di atas 27, berarti Anda sudah mengalami obesitas.</p>`+
                            `<p>Obesitas adalah kondisi ketika Anda memiliki jumlah lemak yang berlebih di dalam tubuh. Kondisi ini tidak baik untuk kesehatan karena dapat meningkatkan risiko penyakit jantung, diabetes, stroke, dan tekanan darah tinggi.</p>`+
                            `<p>Kami merekomendasikan anda untuk menurunkan berat badan Anda hingga ${c} Kg.</p>`+
                            `<p>Untuk mengatasinya, Anda disarankan untuk mengurangi jumlah kalori yang masuk ke dalam tubuh dengan mengonsumsi makanan yang lebih sehat, seperti sayuran dan buah-buahan, serta berolahraga secara rutin.</p>`+
                            `<p>Jika perlu, Anda bisa berkonsultasi dengan dokter untuk memulai program pengurangan berat badan untuk memperoleh berat badan ideal.</p>`+
                            `<a href="../index.html" target="_blank">Baca selangkapnya di sini</a>`;
          tbbb.innerHTML = isiTbBB;
          displayContentBmi.innerHTML = bmiContent;
          displayContentBbi.innerHTML = bbiContent;
          displayContentAboutBmi.innerHTML = aboutBmiContent;
        }
      }
  }
  function displayBbi(w, x, y){
    if(x == "pria"){
      let a = y - 100;
      let b = a * 10 / 100;
      let hasil = a - b;
      let hasilp = Math.floor(hasil);
      
      displayBmi(y, w, hasilp);
    }else if(x == "wanita"){
      let a = y - 100;
      let b = a * 15 / 100;
      let hasil = a - b;
      hasilp = Math.floor(hasil);
      
      displayBmi(y, w, hasilp);
    }else{
      alert("Anda belum memilih Jenis kelamin");
    }
  }
  function bmi() {
    const form = document.getElementById('bmiForm');
    const jk = document.getElementById('jenis-kelamin').value;
    const tb = document.getElementById('tinggi-badan').value;
    const bb = document.getElementById('berat-badan').value;
  
    displayBbi(bb, jk, tb);
    form.reset();
  }


//mental health//

const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");


start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo"); 
}


exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); 
}

continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo");
    quiz_box.classList.add("activeQuiz"); 
    showQuetions(0); 
    queCounter(1); 
    startTimer(15); 
    startTimerLine(0); 
}
let timeValue =  15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");


restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz");
    result_box.classList.remove("activeResult");
    timeValue = 15; 
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count);
    queCounter(que_numb); 
    clearInterval(counter); 
    clearInterval(counterLine); 
    startTimer(timeValue); 
    startTimerLine(widthValue); 
    timeText.textContent = "Time Left"; 
    next_btn.classList.remove("show"); 
}


quit_quiz.onclick = ()=>{
    window.location.reload(); 
}

const next_btn = document.querySelector(".botomm .next_btn");
const bottom_ques_counter = document.querySelector(".botomm .total_que");


next_btn.onclick = ()=>{
    if(que_count < questions.length - 1){ 
        que_count++; 
        que_numb++; 
        showQuetions(que_count);
        queCounter(que_numb); 
        clearInterval(counter); 
        clearInterval(counterLine); 
        startTimer(timeValue); 
        startTimerLine(widthValue); 
        
        next_btn.classList.remove("show"); 
    }else{
        clearInterval(counter); 
        clearInterval(counterLine); 
        showResult(); 
    }
}


function showQuetions(index){
    const que_text = document.querySelector(".que_text");
    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>';
 
    que_text.innerHTML = que_tag; 
    option_list.innerHTML = option_tag; 
    
    const option = option_list.querySelectorAll(".option");

    
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}

let tickIconTag = '<div class="icon tick"><i class="fas"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';


function optionSelected(answer){
    clearInterval(counter); 
    clearInterval(counterLine); 
    let userAns = answer.textContent; 
    let correcAns = questions[que_count].answer; 
    const allOptions = option_list.children.length; 
    
    if(userAns == correcAns){ 
        userScore += 1; 
        answer.classList.add("correct"); 
         
        console.log("Not Safe");
        
    }else{
        answer.classList.add("incorrect");
        console.log("Safe");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == correcAns){ 
                option_list.children[i].setAttribute("class", "option correct"); 
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); 
                
            }
        }
    }
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); 
    }
    next_btn.classList.add("show"); 
}

function showResult(){
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz"); 
    result_box.classList.add("activeResult"); 
    const scoreText = result_box.querySelector(".score_text");
    if (userScore < 3){ 
       
        let scoreTag = '<span>Kamu baik-baik saja.Tidak ada yang perlu dicemaskan, tetap semangat!!! </p></span>';
        scoreText.innerHTML = scoreTag; 
      
    }
    else if(userScore == 3){ 
        let scoreTag = '<span>Kamu mengalami Stress ringan, Istirahat dulu jangan menyerah!!</span>';
        scoreText.innerHTML = scoreTag;
    }
    else if(userScore == 5 ){ 
        let scoreTag = '<span>Kamu mengalami Stess medium, Segara temui keluarga atau orang tersayang anda</span>';
        scoreText.innerHTML = scoreTag;
    }
    else if(userScore == 6 ){ 
      let scoreTag = '<span>Kamu mengalami Stess medium, Segara temui keluarga atau orang tersayang anda</span>';
      scoreText.innerHTML = scoreTag;
  }
    else if(userScore == 6 && 7){
        let scoreTag = '<span>Kamu sedang tidak baik-baik saja lakukan meditasi dan lakukan hal yang menyenangkan </span>';
        scoreText.innerHTML = scoreTag;
    }
    else if(userScore >= 8){ 
        let scoreTag = '<span>Keadaan kamu benar-benar buruk, kamu memerlukan tenaga ahli psikologi</span>';
        scoreText.innerHTML = scoreTag;
    }
     
    
}

