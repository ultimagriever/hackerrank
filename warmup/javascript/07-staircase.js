process.stdin.resume();
process.stdin.setEncoding('ascii');

var input_stdin = "";
var input_stdin_array = "";
var input_currentline = 0;

process.stdin.on('data', function (data) {
  input_stdin += data;
});

process.stdin.on('end', function () {
  input_stdin_array = input_stdin.split("\n");
  main();
});

function readLine() {
  return input_stdin_array[input_currentline++];
}

/////////////// ignore above this line ////////////////////
function spacefill(str, length) {
  return " ".repeat(length - str.length) + str;
}

function staircase(st, length, i = 1) {
  st.push(spacefill("#".repeat(i), length));

  if (length === i) return;
  else staircase(st, length, ++i);
}

function main() {
  var n = parseInt(readLine());

  var st = [];

  staircase(st, n);

  console.log(st.join("\n"));
}
