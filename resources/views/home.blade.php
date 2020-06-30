@extends('layouts.app')

@section('page-title', 'I believe I can Boolean')
    


@section('content')
  <section id="jumbo" class="container">
    <div class="jumbo-left">
      <h1>Diventa <strong>sviluppatore web</strong></h1>
      <h2>Trasformiamo la tua passione in una carriera.<br>Se non trovi lavoro, ti rimborsiamo.</h2>
      <ul>
        <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
        <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
        <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
      </ul>
    </div>
    <div class="jumbo-right">
      <img src="http://boolean.careers/images/homepage/pc-black-gif.gif" alt="image of a computer screen with lines of code">
    </div>
  </section>
  <section id="stats">
    <div class="container">
      <div class="stats-box">
        <p><strong>98%</strong></p>
        <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
      </div>
      <div class="stats-box">
        <p><strong>€ 23.000</strong></p>
        <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
      </div>
      <div class="stats-box">
        <p><strong>#1</strong></p>
        <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
      </div>
    </div>
  </section>
  <section id=employers>
   <div class="container">
      <div class="employers-top">
        I nostri studenti sono stati assunti da:
      </div>
      <div class="employers-bottom">
        <div class="employer-imgbox"><img src="http://boolean.careers/images/companies/facileit.png" alt="facile.it logo" class="employer-logo"></div>
        <div class="employer-imgbox"><img src="http://boolean.careers/images/companies/oneday.png" alt="oneday logo" class="employer-logo"></div>
        <div class="employer-imgbox"><img src="http://boolean.careers/images/companies/prima.png" alt="prima.it logo" class="employer-logo"></div>
        <div class="employer-imgbox shift-rx"><img src="http://boolean.careers/images/companies/fabbrica-digitale-big.png" alt="fabbrica digitale logo" class="employer-logo"></div>
        <div class="employer-imgbox shift-rx"><img src="http://boolean.careers/images/companies/nephila.png" alt="nephila logo" class="employer-logo"></div>
        <div class="employer-imgbox shift-rx"><img src="http://boolean.careers/images/companies/rds.png" alt="rds logo" class="employer-logo"></div>
      </div>
   </div>
  </section>
@endsection