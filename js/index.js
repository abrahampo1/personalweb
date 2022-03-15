// Sleep function, lo necesito para vivir
function sleep(milliseconds) {
  const date = Date.now()
  let currentDate = null
  do {
    currentDate = Date.now()
  } while (currentDate - date < milliseconds)
}

// Initialising the canvas
var canvas = document.querySelector('canvas'),
  ctx = canvas.getContext('2d')

// Setting the width and height of the canvas
canvas.width = window.innerWidth
canvas.height = window.innerHeight

// Setting up the letters
var letters =
  'ぁ あ ぃ い ぅ ぇ お か が き ぎ く ぐ け げ こ  で と さ ぬ ば を フ ェ タ ム な ゝ ら ノ は'
letters = letters.split('')

// Setting up the columns
var fontSize = 10,
  columns = canvas.width / fontSize

// Setting up the drops
var drops = []
for (var i = 0; i < columns; i++) {
  drops[i] = 1
}

// Setting up the draw function
function draw() {
  ctx.fillStyle = 'rgba(0, 0, 0, .1)'
  ctx.fillRect(0, 0, canvas.width, canvas.height)
  for (var i = 0; i < drops.length; i++) {
    var text = letters[Math.floor(Math.random() * letters.length)]
    ctx.fillStyle = '#0f0'
    ctx.fillText(text, i * fontSize, drops[i] * fontSize)
    drops[i]++
    if (drops[i] * fontSize > canvas.height && Math.random() > 0.95) {
      drops[i] = 0
    }
  }
}
// Loop the animation
//setInterval(draw, 33)

// Make the DIV element draggable:

function dragElement(header) {
  var pos1 = 0,
    pos2 = 0,
    pos3 = 0,
    pos4 = 0
  elmnt = header.parentNode

  // otherwise, move the DIV from anywhere inside the DIV:
  header.onmousedown = dragMouseDown

  function dragMouseDown(e) {
    $('.topmost').removeClass('topmost')
    $(elmnt).addClass('topmost')
    e = e || window.event
    e.preventDefault()
    // get the mouse cursor position at startup:
    pos3 = e.clientX
    pos4 = e.clientY
    document.onmouseup = closeDragElement
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag
  }

  function elementDrag(e) {
    e = e || window.event
    e.preventDefault()
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX
    pos2 = pos4 - e.clientY
    pos3 = e.clientX
    pos4 = e.clientY
    // set the element's new position:
    elmnt.style.top = elmnt.offsetTop - pos2 + 'px'
    elmnt.style.left = elmnt.offsetLeft - pos1 + 'px'
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null
    document.onmousemove = null
  }
}

// Pop up help window
let help_window = document.getElementById('window-help')

function help_show() {
  help_window.hidden = false
}

function help_close() {
  help_window.hidden = true
}

// Pop up furry jk
let furry = document.getElementById('window-furry')

function furry_show() {
  furry.hidden = false
}

function furry_close() {
  furry.hidden = true
}

// texto que se muestra cuando le das al boton D:
textouwu = document.getElementById('textouwu')

function footer_boton(x) {
  if (x == 'done') {
    textouwu.innerHTML = 'Done!'
  }

  if (x == 'notsure') {
    textouwu.innerHTML = "Don't be afraid"
  }

  if (x == 'anything') {
    textouwu.innerHTML = 'Search for help'
  }
}

// cpu usage change
function cpu_usage() {
  let x = Math.floor(Math.random() * 10) + 5
  document.getElementById('cpu-usage').innerHTML = 'CPU Usage ' + x + '%'
}

setInterval(cpu_usage, 850)

// deep owon't
function deep(){
  setInterval(draw, 33);
}