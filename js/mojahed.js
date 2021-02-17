console.log('mojahed.js');

var pattern = document.getElementById('pattern')

// for (var i = 0; i < 10; i++) {
//   var cln = pattern.cloneNode(true);
//   cln.removeAttribute('hidden')
//   document.getElementById("grid").appendChild(cln);
// }

// var pics_count = 66
// var pics_in_col_count = pics_count / 3

var titles = {
  "14592": "nabat1",
  "14593": "nabat2",
  "14594": "nabat3",
  "14595": "nabat",
  "14596": "nabat",
  "14597": "nabat",
  "14598": "nabat",
  "14599": "nabat",
  "14600": "nabat",
  "14601": "nabat",
  "14602": "nabat",
  "14603": "nabat",
  "14604": "nabat",
  "14605": "nabat",
  "14606": "nabat",
  "14607": "nabat",
  "14608": "nabat",
  "14609": "nabat",
  "14610": "nabat",
  "14611": "nabat",
  "14612": "nabat",
  "14613": "nabat",
  "14614": "nabat",
  "14615": "nabat",
  "14616": "nabat",
  "14617": "nabat",
  "14618": "nabat",
  "14619": "nabat",
  "14620": "nabat",
  "14621": "nabat",
  "14622": "nabat",
  "14623": "nabat",
  "14624": "nabat",
  "14625": "nabat",
  "14626": "nabat",
  "14627": "nabat",
  "14628": "nabat",
  "14629": "nabat",
  "14630": "nabat",
  "14631": "nabat",
  "14632": "nabat",
  "14633": "nabat",
  "14634": "nabat",
  "14635": "nabat",
  "14636": "nabat",
  "14637": "nabat",
  "14638": "nabat",
  "14639": "nabat",
  "14640": "nabat",
  "14641": "nabat",
  "14642": "nabat",
  "14643": "nabat",
  "14644": "nabat",
  "14645": "nabat",
  "14646": "nabat",
  "14647": "nabat",
  "14648": "nabat",
  "14649": "nabat",
  "14650": "nabat",
  "14651": "nabat",
  "14652": "nabat",
  "14653": "nabat",
  "14654": "nabat",
  "14655": "nabat",
  "14656": "nabat",
  "14657": "nabat"
}

picounter = 0
for (title in titles) {
  var cln = pattern.cloneNode(true);
  cln.removeAttribute('hidden')
  cln.querySelector('img').setAttribute('src', 'pics/' + title + '.jpg')
  cln.querySelector('span').innerHTML = titles[title]
  document.getElementById("col-" + String((picounter % 3) + 1)).appendChild(cln);
  picounter += 1
}

// for (var i = 0; i < 66; i++) {
//   // console.log();
//   titles[i + 14592] = 'nabat'
// }
// console.log(titles);