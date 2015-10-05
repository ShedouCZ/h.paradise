<div class="masthead">
    <nav class="navbar navbar-default" style="margin-top: 20px;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/domu">Hotel Paradise</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/domu">Domů</a></li>
                    <li><a href="/o-nas">O nás</a></li>
                    <li><a href="/cenik">Ceník</a></li>
                    <li class="active"><a href="/rezervace">Rezervace</a></li>
                    <li><a href="/kontakt">Kontakt</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/rezervace">Čeština</a></li>
                    <li><a href="/rezervation" style="margin-right: 50px;">English</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<legend>On-line Rezervace</legend>

<div class="col-sm-12" style="background-color:lavender;">
    <div class="col-sm-8">

        <fieldset class="rezervace">
            <form action="" method="post" class="B">
                <br>
                <label>Jméno, Příjmení (popř. název firmy): </label><input type="text" name="Jmeno" value="" size="49"><br><br>
                <label>Adresa: </label><input type="text" name="Adresa" size="77" value=""><br><br>
                <label>E-mail: </label><input type="text" name="Email" size="35" value="">&nbsp;&nbsp;
                <label>Telefon: </label><input type="text" name="Telefon" size="25" value=""><br><br>
                <label>Rezervace od: </label>
                <input type="date">
                <label>Rezervace do: </label>
                <input type="date">
                <br><br>
                <label>Prosím zarezervujte mi: </label><br>
                <label>Počet pokojů: </label><input type="text" name="Pocet1" value="" size="2">
                <select name="Typ1">
                    <option value="dvoulůžkových">Dvoulůžkových</option>
                    <option value="třílůžkových">Třílůžkových</option>
                    <option value="čtyřlůžkových">Čtyřlůžkových</option>
                    <option value="pětilůžkových">Pětilůžkových</option>
                </select>&nbsp;&nbsp;
                <label>Počet pokojů: </label><input type="text" name="Pocet2" value="" size="2">
                <select name="Typ2">
                    <option value="dvoulůžkových">Dvoulůžkových</option>
                    <option value="třílůžkových">Třílůžkových</option>
                    <option value="čtyřlůžkových">Čtyřlůžkových</option>
                    <option value="pětilůžkových">Pětilůžkových</option>
                </select><br><br>
                <label>Počet pokojů: </label><input type="text" name="Pocet3" value="" size="2">
                <select name="Typ3">
                    <option value="dvoulůžkových">Dvoulůžkových</option>
                    <option value="třílůžkových">Třílůžkových</option>
                    <option value="čtyřlůžkových">Čtyřlůžkových</option>
                    <option value="pětilůžkových">Pětilůžkových</option>
                </select>&nbsp;&nbsp;
                <label>Počet pokojů: </label><input type="text" name="Pocet4" value="" size="2">
                <select name="Typ4">
                    <option value="dvoulůžkových">Dvoulůžkových</option>
                    <option value="třílůžkových">Třílůžkových</option>
                    <option value="čtyřlůžkových">Čtyřlůžkových</option>
                    <option value="pětilůžkových">Pětilůžkových</option>
                </select><br><br>
                <label>Počet osob: </label><input type="text" name="PocetDospelych" value="" size="3"> Dospělých&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="PocetDeti" value="" size="3"> Dětí<br><br>
                <input type="checkbox" name="Pes" value="ano"><label style="margin-left: 10px;"> Pes (za příplatek dle aktuálního ceníku): </label><br><br>
                <label>Komentář k rezervaci: </label><br>
                <textarea name="Komentar" rows="4" cols="60"></textarea>
                <div class="button">
                    <input type="reset" name="PressRezervace" value="smazat" class="button">
                    <input type="submit" name="PressRezervace" value="pokračovat v rezervaci" class="button">
                </div>
                <br>
            </div>
            <div class="col-sm-4">
            </div>
        </form>
    </fieldset>

</div>
