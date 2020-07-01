@extends('layouts.app')

@section('page-title', 'FAQs')

@section('content')
  <section id="intro" class="container">
    <h1>Domande frequenti</h1>
    <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
  </section>
  <section id="faqs-box">
    <div class="faqs-left">
      <h2>Durante il corso</h2>
      @foreach ($faqs_now as $faq)
      <div class="faq-question">
        <div class="question">
          <span>{{$faq['question']}}</span>
          <i class="fas fa-plus"></i></div>
        <div class="answer">
          @foreach(explode('|', $faq['answer']) as $answer_para)
              <p>{{$answer_para}}</p>
          @endforeach
        </div>
      </div>
    @endforeach
      </div>
    </div>
    <div class="faqs-right clearfix">
      <h2>Dopo il corso</h2>
      @foreach ($faqs_after as $faq)
        <div class="faq-question">
          <div class="question">
            <span>{{$faq['question']}}</span>
            <i class="fas fa-plus"></i></div>
          <div class="answer">
            @foreach(explode('|', $faq['answer']) as $answer_para)
                <p>{{$answer_para}}</p>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </section>
  <script src="{{asset('js/app.js')}}"></script>
@endsection

