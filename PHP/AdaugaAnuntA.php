<!DOCTYPE html>
<html>
<body>
<div id="page-wrap">
    <section id="main-content">
        <div id="guts" class="tabcontent">
            <form action="/myProject/PHP/AdaugaAnuntAdmin.php" method="post">
                <input type="text" id="idNume" name="nume" placeholder="Nume"><br>
                <input type="text" id="idNumeProprietar" name="numeProprietar" placeholder="Nume proprietar"><br>
                <select id="idTipAnunt" name="tipAnunt" placeholder="Tip anunt">
                    <option value="vanzare">Vanzare</option>
                    <option value="inchiriere">Inchiriere</option>
                </select><br>
                <input type="number" id="idPret" name="pret" placeholder="Pret"><br>
                <input type="text" id="idJudet" name="judet" placeholder="Judet"><br>
                <input type="text" id="idOras" name="oras" placeholder="Oras"><br>
                <input type="text" id="idZona" name="zona" placeholder="Zona"><br>
                <input type="number" id="idNrCamere" name="nrCamere" placeholder="Numar camere"><br>
                <input type="number" id="idEtaj" name="etaj" placeholder="Etaj"><br>
                <input type="number" id="idSuprafata" name="suprafata" placeholder="Suprafata"><br>
                <select id="idTipApartament" name="tipApartament" placeholder="Tip apartament">
                    <option value="decomandat">Decomandat</option>
                    <option value="semidecomandat">Semidecomandat</option>
                </select><br>
                <input type="text" class="classDescriere" id="idContact" name="contact" placeholder="Date de contact..."><br>
                <input type="text" class="classDescriere" name="descriere" placeholder="Descriere..."><br>
                <input type="submit" name="AdaugaAnuntAdmin" value="Adauga">
            </form>
        </div>
    </section>
</div>
</body>
</html>