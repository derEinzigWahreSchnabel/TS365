<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

  <section id="head" class="head" style="background:url('https://images.pexels.com/photos/1450082/pexels-photo-1450082.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-position: center; background-size: cover; background-attachment: fixed;">
    <div class="grid">
    <div class="überschrift">
      <h1>Es ist deine Zukunft <br> Planen wir gemeinsam!</h1>
    </div>
    <div class="themes">
      <div class="absulute">
        <div class="absichern">
          <a href="#"> Jetzt alles über Absicherung!</a>
        </div>
        <div class="immo">
          <a href="#">Infomiere dich über Immobielien</a>
        </div>
        <div class="finanzen">
          <a href="#">Finde ein Kredit der zu dir passt!</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="slider" class="slide">
  <div class="grid">
    <div class="sichern">
      <div class="box">
        <div class="image" style="background:url('https://images.pexels.com/photos/128867/coins-currency-investment-insurance-128867.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'); background-size: cover; background-position: center; width: auto; height: 250px;">
        </div>
        <p class="überschrift">Absicherung</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
     </div>
     <div class="immo">
      <div class="box">
       <div class="image" style=" background: url('https://images.pexels.com/photos/206172/pexels-photo-206172.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');background-size: cover; background-position: center; width: auto; height: 250px;">
       </div>
       <p class="überschrift">Immobielien</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
     </div>
     <div class="immo">
       <div class="box">
        <div class="image" style="background:url('https://images.pexels.com/photos/3943723/pexels-photo-3943723.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-position: center; background-size: cover; width: auto; height: 250px;">
        </div>
        <p class="überschrift">Finanzen</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
     </div>
  </div>
</section>

<section id="abischern" class="absichern">
  <div class="überschrift">
    <h2>Jetzt Absichern!</h2>
  </div>
  <div class="items">
    <div class="grid">
      <div class="box">
        <div class="item" style="background: url('https://www.flaticon.com/svg/vstatic/svg/2772/2772603.svg?token=exp=1613084294~hmac=4da83ae9a241d443fafa75a403125c6b'); background-position: center; background-size: cover; width: 70px; height: 70px; content: center;">
        </div>
        <div class="text">
          <p>Mopedversicherung</p>
        </div>
      </div>
      <div class="box">
        <div class="item">

        </div>
        <div class="text">
          <p>Autoversicherung</p>
        </div>
      </div>
      <div class="box">
        <div class="item">

        </div>
        <div class="text">
          <p>Krankenversicherung</p>
        </div>
      </div>
      <div class="box">
        <div class="item">

        </div>
        <div class="text">
          <p>Hausrat</p>
        </div>
      </div>
      <div class="box">
        <div class="item">

        </div>
        <div class="text">
          <p>Rechtschutz</p>
        </div>
      </div>
      <div class="box">
        <div class="item">

        </div>
        <div class="text">
          <p>Altersvorsorge</p>
        </div>
      </div>
    </div>
  </div>
  <div class="grid">
    <div class="logo">

    </div>
    <div class="content">
      <p class="header"> Lorem Ipsum dolor</p>
      <p>Lorim ipsum dolor sit  amet ist nur ein Dummitext, der als Platzhalter eingesetzt wird</p>
      <a href="#" class="button">Kontakt</a>
    </div>
  </div>
</section>

<section id="immo" class="immos">
  <div class="header">
    <h3>Immobielien</h3>
  </div>
  <div class="grid">
    <div class="img">
      <img src="" alt="">
    </div>
    <div class="content">
      <div class="block">
        <div class="row">
          <p>Immobielienbewertung</p>
        </div>
        <div class="row">
          <p>Lorem ipsum dolorsit amet ist nur ein Dummitext</p>
        </div>
        <div class="row">
          <p>Lorem ipsum dolorsit amet ist nur ein Dummitext</p>
        </div>
        <div class="row">
          <p>Lorem ipsum dolorsit amet ist nur ein Dummitext</p>
        </div>
        <div class="row">
          <p>Immobielienfinanzierung</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="finanzen" class="finanz">
  <div class="header">
    <h4>Finanzen</h4>
  </div>
  <div class="grid">
    <div class="items">
      <div class="item">
      </div>
      <div class="item2">

      </div>
      <div class="item3">

      </div>
    </div>
    <div class="content">
      <p class="head">Kredit</p>
      <p>Lorim ipsum dolor sit  amet ist nur ein Dummitext, der als Platzhalter eingesetzt wirdLorim ipsum dolor sit  amet ist nur ein Dummitext, der als Platzhalter eingesetzt wirdLorim ipsum dolor sit  amet ist nur ein Dummitext, der als Platzhalter eingesetzt wirdLorim ipsum dolor sit  amet ist nur ein Dummitext, der als Platzhalter eingesetzt wird</p>
      <a href="#" class="button">Kontakt!</a>
    </div>
  </div>
</section>

<section id="kontakt" class="kontakt">
  <div class="header">
    <h5>Kontakt</h5>
  </div>
  <div class="box">
    <div class="grid">
      <div class="content">
        <p>Über mich:Lorem Ipsum dolor sit amet ist nur ein Dummytext, der als Platzhalter verwendet wird
            <br>Email: torstenschnabel@gmx.de
            <br>Mobil: 0160 99121205
        </p>
      </div>
      <div class="img">
        <img src="" alt="">
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
