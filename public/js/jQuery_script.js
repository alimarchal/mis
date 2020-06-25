$("#region").on("change", function () {
    var sel = '<option value="">None</option>';
    if ($(this).val() == "NORTH") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Muzaffarabad">Muzaffarabad</option>'
        sel += '<option value="Rawalakot">Rawalakot</option>'

    }
    if ($(this).val() == "SOUTH") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Mirpur">Mirpur</option>'
        sel += '<option value="Kotli">Kotli</option>'

    }
    $("#district").html(sel);
});

$("#district").on("change", function () {
    var sel = '<option value="">None</option>';
    if ($(this).val() == "Muzaffarabad") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Muzaffarabad">Muzaffarabad</option>'
        sel += '<option value="Neelum">Neelum</option>'
        sel += '<option value="Hattian">Hattian</option>'
    }

    if ($(this).val() == "Rawalakot") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Poonch">Poonch</option>'
        sel += '<option value="Sudhnoti">Sudhnoti</option>'
        sel += '<option value="Bagh">Bagh</option>'
        sel += '<option value="Havelli">Havelli</option>'
    }


    if ($(this).val() == "Mirpur") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Mirpur">Mirpur</option>'
        sel += '<option value="Bhimber">Bhimber</option>'
    }

    if ($(this).val() == "Kotli") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Kotli">Kotli</option>'
    }

    $("#region2").html(sel);
});

$("#region2").on("change", function () {
    var sel = '<option value="">None</option>';
    if ($(this).val() == "Neelum") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Athmuqam">Athmuqam</option>'
        sel += ' <option value="Shardah">Shardah</option>'
        sel += ' <option value="Joora">Joora</option>'
        sel += ' <option value="Kundal Sahi Branch">Kundal Sahi Branch</option>'
        sel += ' <option value="Kutton">Kutton</option>'
    }

    if ($(this).val() == "Muzaffarabad") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="M.Br.Muzaffarabad">M.Br.Muzaffarabad</option>'
        sel += ' <option value="Garhi-Dupatta">Garhi-Dupatta</option>'
        sel += ' <option value="Lower-Plate Mzd">Lower-Plate Mzd</option>'
        sel += ' <option value="Chatter-Kalas">Chatter-Kalas</option>'
        sel += ' <option value="Patikha">Patikha</option>'
        sel += ' <option value="Madina-Market Mzd">Madina-Market Mzd</option>'
        sel += ' <option value="District Complex Mzd">District Complex Mzd</option>'
        sel += ' <option value="Ladies Branch Mzd">Ladies Branch Mzd</option>'
        sel += ' <option value="Upper Ada MZD">Upper Ada MZD</option>'
        sel += '<option value="Gojra Bypass MZD">Gojra Bypass MZD</option>'
    }

    if ($(this).val() == "Hattian") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Chakar">Chakar</option>'
        sel += ' <option value="Hattian Bala">Hattian Bala</option>'
        sel += ' <option value="Chakothi">Chakothi</option>'
        sel += ' <option value="Chathian">Chathian</option>'
    }

    if ($(this).val() == "Poonch") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Rawalakot">Rawalakot</option>'
        sel += ' <option value="Hajira">Hajira</option>'
        sel += ' <option value="Abbaspur">Abbaspur</option>'
        sel += ' <option value="Khaigala">Khaigala</option>'
        sel += ' <option value="Paniola">Paniola</option>'
        sel += ' <option value="Thorar">Thorar</option>'
        sel += ' <option value="CMH Road">CMH Road</option>'
        sel += ' <option value="Bank Beikh">Bank Beikh</option>'
    }

    if ($(this).val() == "Sudhnoti") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Pallandri">Pallandri</option>'
        sel += ' <option value="Trar Khal">Trar Khal</option>'
        sel += ' <option value="Baloch">Baloch</option>'
        sel += ' <option value="Talian">Talian</option>'
        sel += ' <option value="Mang">Mang</option>'
    }

    if ($(this).val() == "Bagh") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Bagh">Bagh</option>'
        sel += ' <option value="Arja">Arja</option>'
        sel += ' <option value="Dhirkot">Dhirkot</option>'
    }

    if ($(this).val() == "Havelli") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Kahutta">Kahutta</option>'
    }

    if ($(this).val() == "Mirpur") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="M.Br.Mirpur">M.Br.Mirpur</option>'
        sel += ' <option value="Dadyal">Dadyal</option>'
        sel += ' <option value="Chakswari">Chakswari</option>'
        sel += ' <option value="Islamgarh">Islamgarh </option>'
        sel += ' <option value="F-3 Mirpur">F-3 Mirpur</option>'
        sel += ' <option value="Pulmanda">Pulmanda</option>'
        sel += ' <option value="Jatlan">Jatlan</option>'
        sel += ' <option value="MM Town">MM Town</option>'
        sel += ' <option value="Jhatti Dheri Cross">Jhatti Dheri Cross</option>'
        sel += ' <option value="Ladies Branch Mirpur">Ladies Branch Mirpur</option>'
        sel += ' <option value="Saranda">Saranda</option>'
        sel += ' <option value="Ratta">Ratta</option>'
    }

    if ($(this).val() == "Bhimber") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Bhimber">Bhimber</option>'
        sel += ' <option value="Barnala">Barnala</option>'
        sel += ' <option value="Chowki">Chowki</option>'
        sel += ' <option value="Poona">Poona</option>'
        sel += ' <option value="Moil">Moil</option>'
    }

    if ($(this).val() == "Kotli") {
        sel = ' <option value="">None</option>';
        sel += ' <option value="Kotli">Kotli</option>'
        sel += ' <option value="Sehnsa">Sehnsa</option>'
        sel += ' <option value="Nar">Nar</option>'
        sel += ' <option value="Bratla">Bratla</option>'
        sel += ' <option value="Khuirata">Khuirata</option>'
        sel += ' <option value="Sarsawa">Sarsawa</option>'
        sel += ' <option value="Khad Gujran">Khad Gujran</option>'
        sel += ' <option value="Charoi">Charoi</option>'
        sel += ' <option value="Tattapani">Tattapani</option>'
        sel += ' <option value="Mitoti">Mitoti</option>'
        sel += ' <option value="Dhanna">Dhanna</option>'
        sel += ' <option value="Juna">Juna</option>'
        sel += ' <option value="Seharmandi">Seharmandi</option>'
        sel += ' <option value="Jarahi">Jarahi</option>'
        sel += ' <option value="Goi">Goi</option>'
        sel += ' <option value="Lorry Adda">Lorry Adda</option>'
    }

    $("#district2").html(sel);
});
