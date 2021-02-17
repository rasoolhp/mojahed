console.log('mojahed.js');

var pattern = document.getElementById('pattern')

// for (var i = 0; i < 10; i++) {
//   var cln = pattern.cloneNode(true);
//   cln.removeAttribute('hidden')
//   document.getElementById("grid").appendChild(cln);
// }

// var pics_count = 66
// var pics_in_col_count = pics_count / 3

var pics_db = [
  ["14600", "🎁 colored rock candy"],
  ["14635", "🛍️ noghl"],
  ["14602", "🎁 rock candy with stick"],
  ["14638", "🛍️ damask rose candy"],
  ["14648", "📦 ginger candy"],
  ["14637", "🛍️ noghl"],
  ["14594", "⚖️ white rock candy"],
  ["14633", "🛍️ yellow sugar candy"],
  ["14642", "🛍️ pink sugar candy"],
  ["14599", "🎁 rock candy with stick"],
  ["14636", "🛍️ noghl"],
  ["14598", "🎁 rock candy with stick"],
  ["14597", "🛍️ noghl"],
  ["14627", "🎁 white rock candy"],
  ["14626", "🎁 white rock candy"],
  ["14624", "🎁 white rock candy"],
  ["14607", "🎁 saffron rock candy"],
  ["14608", "🎁 saffron rock candy"],
  ["14609", "🎁 saffron rock candy"],
  ["14610", "🎁 saffron rock candy"],
  ["14611", "🎁 saffron rock candy"],
  ["14612", "🎁 saffron rock candy"],
  ["14613", "🎁 saffron rock candy"],
  ["14614", "🎁 saffron rock candy"],
  ["14606", "🎁 saffron rock candy"],
  ["14615", "🎁 saffron rock candy"],
  ["14616", "🎁 saffron rock candy"],
  ["14617", "🎁 saffron rock candy"],
  ["14618", "🎁 saffron rock candy"],
  ["14619", "🎁 saffron rock candy"],
  ["14620", "🎁 saffron rock candy"],
  ["14623", "🎁 saffron rock candy"],
  ["14645", "🎁 saffron rock candy"],
  ["14625", "🎁 saffron rock candy"],
  ["14647", "🎁 saffron rock candy"],
  ["14631", "⚖️ white rock candy"],
  ["14595", "⚖️ white rock candy"],
  ["14596", "⚖️ white rock candy"],
  ["14592", "⚖️ saffron rock candy"],
  ["14593", "⚖️ saffron rock candy"],
  ["14634", "🛍️ noghl"],
  ["14632", "🛍️ pink sugar candy"],
  ["14639", "🛍️ damask rose candy"],
  ["14640", "🛍️ brown sugar candy"],
  ["14641", "🛍️ pink sugar candy"],
  ["14643", "🛍️ yellow sugar candy"],
  ["14601", "🎁 rock candy with stick"],
  ["14644", "🛍️ yellow sugar candy"],
  ["14633", "🛍️ yellow sugar candy"],
  ["14646", "📦 saffron rock candy"],
  ["14621", "📦 saffron rock candy"],
  ["14622", "📦 saffron rock candy"],
  ["14630", "📦 saffron rock candy"],
  ["14604", "📦 saffron rock candy"],
  ["14605", "📦 saffron rock candy"],
  ["14628", "📦 white rock candy"],
  ["14629", "📦 white rock candy"],
  ["14603", "📦 white rock candy"],
  ["14649", "📦 ginger candy"],
  ["14655", "🛍️ tarvij sugar candy"],
  ["14651", "🏭 factory"],
]

picounter = 0
for (pic in pics_db) {
  var cln = pattern.cloneNode(true);
  cln.removeAttribute('hidden')
  // global: 'https://rasoolhp.github.io/mojahed/pics/'
  // cln.querySelector('img').setAttribute('data-src', 'https://rasoolhp.github.io/mojahed/pics/' + title + '.jpg')
  // local: 'pics/'
  cln.querySelector('img').setAttribute('src', 'pics/' + pics_db[pic][0] + '.jpg')
  // title:
  if (pics_db[pic][1] == "notset") {
    cln.querySelector('span').innerHTML = pics_db[pic][0]
  } else {
    cln.querySelector('span').innerHTML = pics_db[pic][1]
    // cln.querySelector('span').innerHTML = pics_db[pic][0] + pics_db[pic][1]
  }
  document.getElementById("col-" + String((picounter % 3) + 1)).appendChild(cln);
  picounter += 1
}

// for (var i = 0; i < 66; i++) {
//   // console.log();
//   titles[i + 14592] = 'notset'
// }
// console.log(titles);

// pics_db = []
// for (title in titles) {
//   pics_db.push([title, titles[title]])
// }
// console.log(pics_db);