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
function zerofill(n) {
  n = n.toString();
  return "0".repeat(2 - n.length) + n;
}

function main() {
  var time = readLine();

  var ampm = time.substr(-2);
  var time = time.replace(ampm, '').split(':');

  var [hour, minute, second] = time;

  if (/am/i.test(ampm)) {
    if (hour === '12') {
      hour = '00';
    }
  } else {
    if (hour !== '12') {
      hour = (parseInt(hour) + 12).toString();
    }
  }

  console.log("%s:%s:%s", hour, minute, second);
}
