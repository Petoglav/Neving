
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <title>Ponuda | NEVING</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <button id="tButton" title="Go to top">&#x25B2;</button>
    <nav>
        <div class="navigacija">
            <a href="index.html" id="logo" style="float: left;">NEVING |</a>
            <div class="meni">
                <a href="kontakt.html">KONTAKT</a>
                <a href="nekretnine.html">NEKRETNINE</a>
                <a class="tab" href="djelatnosti.html">DJELATNOSTI</a>
                <div class="dropdown">
                <button class="dropbtn">REFERENCE</button>
                    <div class="dropdown-content">
                        <a href="Gračani">Gračani</a>
                        <a href="Gračani">Gračani</a>
                        <a href="Gračani">Remete</a>
                    </div>
                </div> 
                <a href="tvrtka.html">TVRTKA</a>
                <a href="index.html">POČETNA</a>
            </div>
            <a class="rButton" style="float:right" href="#">
                <span class="hamburger">
                    <span class="ham"></span>
                    <span class="ham"></span>
                    <span class="ham"></span>
                </span>
            </a>
            <aside>
                <div class="izbornik">
                <ul>
                    <li><a href="index.html">POČETNA</a></li>
                    <li><a href="tvrtka.html">TVRTKA</a></li>
                    <li><a href="" class="eButton">REFERENCE</a>
                        <ul class="izbornik-traka">
                            <li><a href="index.html">POČETNA</a></li>
                            <li><a href="tvrtka.html">TVRTKA</a></li>
                            <li><a href="reference.html">REFERENCE</a>
                        </ul>
                    </li>
                    <li><a href="djelatnosti.html">DJELATNOSTI</a></li>
                    <li><a href="nekretnine.html">NEKRETNINE</a></li>
                    <li><a href="kontakt.html">KONTAKT</a></li>
                </ul>
                </div>
            </aside>
        </div>
    </nav>
    <div class="sadrzaj">
        <section style="padding-top: 90px;">
            <div class="table">
            <h2 style="text-align: center; width: 100%">PONUDA</h2>
            <form name="forma" method="post" style="align: center; width: 100%;">
                <h3>Forma ponude</h3>
                <p>Unesite potrebne podatke. Naše osoblje javit će vam se u najkraćem mogućem roku.</p>
                <br>
                <div class="pocetak">
                    <label for="podaci">Podaci o poslu</label>
                    <select name="podaci">
                        <option value="" selected="true" disabled="disabled">Izaberite vrstu posla...</option>
                        <option value="">Nadzorni inžinjer</option>
                        <option value="">Građevinski radovi</option>
                        <option value="">Iskopi, mini bager</option>
                        <option value="">Novogradnja</option>
                        <option value="">Zemljani radovi</option>
                        <option value="">Zidar</option>
                        <option value="">Gipsane, knauf pliče, suha gradnja </option>
                        <option value="">Soboslikarski radovi</option>
                        <option value="">Zidne obloge</option>
                        <option value="">Podne obloge</option>
                    </select>
                    <br>
                    <label for="ukratko">Ukratko, što trebate</label>
                    <input type="text" class="form-control" name="ukratko" placeholder="5 riječi" value="" required="" aria-required="true">
                    <br>
                    <label for="kvadratura">Kvadratura</label>
                    <input type="text" class="form-control" name="ukratko" value="" required="" aria-required="true">
                    <br>
                    <label for="podaci">Kada želite početi s izvedbom?</label>
                    <select name="podaci">
                        <option value="Nije odabrano"  selected="true" disabled="disabled">Odaberi...</option>
                        <option value="Odmah">Odmah</option>
                        <option value="do 1 mjeseca">do 1 mjeseca</option>
                        <option value="1-3 mjeseca">1-3 mjeseca</option>
                        <option value="Više od 3 mjeseca">Više od 3 mjeseca</option>
                        <option value="Više od 6 mjeseci">Više od 6 mjeseci</option>
                        <option value="Zanima me samo okvirna cijena">Zanima me samo okvirna cijena</option>
                    </select>
                    <br>
                    <label for="lokacija">Upišite lokaciju izvedbe radova:</label>
                    <input type="text" class="form-control" name="lokacija" placeholder="Grad" value="" required="" aria-required="true">
                    <button class="button bg_crevena" id="dButton">Dalje</button>
                </div>
                <div class="kraj" style="display: none;">
                <br>
                <label for="imeprezime">Ime i Prezime</label>
                <input type="text" class="form-control" name="ime" value="" required="" aria-required="true">
                <br>
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="" required="" aria-required="true">
                <br>
                <label for="telefon">Broj telefona</label>
                <input type="text" class="form-control" name="telefon" value="">
                <br>
                <label for="naslov">Naslov</label>
                <input type="text" class="form-control" name="subject" value="">
                <br>
                <label for="poruka">Poruka</label>
                <textarea name="poruka" id="" cols="30" rows="10" class="form-control" required="" aria-required="true"></textarea>
                <br>
                <button class="button bg_crevena" id="nButton">Natrag</button>
                <button class="button bg_crevena" type="submit" style="float: right;">Pošalji</button>
                </div>
            </form>
            </div>
        </section>
        <section>
            <div class="table tamno-plava-bg b_bijela">
                <div class="kanta">
                    <h2 class="naslov big"><span class="b_crevena">30 godina</span> izvrsnosti</h2><br>
                    <p class="text bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officiis quos expedita ipsa, a quidem inventore voluptates debitis accusamus tenetur qui et voluptas dicta, culpa earum, doloribus odio consectetur consequuntur soluta quasi nobis! Deserunt voluptatum reiciendis iure expedita sequi quisquam laboriosam temporibus exercitationem.</p>
                    <div class="brojevi">
                        <span class="broj" data-number="30" data-decimal="0">30</span>
                        <span class="broj_text">godina djelovanja</span>
                    </div>
                    <div class="brojevi">
                        <span class="broj" data-number="50" data-decimal="0">50</span>
                        <span class="broj_text">Odrađena projekta</span>
                    </div>
                    <div class="brojevi">
                        <span class="broj" id="zaposlenici" data-number="15" data-decimal="0">15</span>
                        <span class="broj_text">Zadovoljnih klijenata</span>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="table">
                <div class="col">
                    <h3>NEVING d.o.o.</h3>
                    <address>
                        Radićeva 3,<br>
                        HR-10000 Zagreb<br>
                        OIB: 70989676533
                    </address>
                </div>
                <div class="col">
                    <h3>Kontakt:</h3>
                    <address>
                        <a href="mailto:neving_doo@yahoo.com">neving_doo@yahoo.com</a><br>
                        <a href="callto:+38514580855">+385 1 4580-855</a>
                    </address>
                </div>
                <div class="col">
                    <h3>Prava:</h3>
                    <address>
                     © 2021. Neving d.o.o.<br>
                    </address>
                </div>
                <div class="footer_bottom">
                    <a href="index.html">POČETNA</a>
                    <a href="tvrtka.html">TVRTKA</a>
                    <a href="djelatnosti.html">DJELATNOSTI</a>
                    <a href="nekretnine.html">NEKRETNINE</a>
                    <a href="kontakt.html">KONTAKT</a>
                    <a href="https://www.linkedin.com" target="_blank"><img src="img/icon_linkedin_retina.png" style="width: 83px; height: 23px; float: right;"></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="config.js"></script>
    <script>
    $('#dButton').click(function() {
        $('.kraj').show();
        $('.pocetak').hide();
    window.scroll({top: 0, behavior: "smooth"})
    });
    $('#nButton').click(function() {
        $('.pocetak').show();
        $('.kraj').hide();
    window.scroll({top: 0, behavior: "smooth"})
    });
    </script>
</body>
</html>
