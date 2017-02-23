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

function compare(a, b) {
  return a - b;
}

function main() {
  var a0_temp = readLine().split(' ');
  var a0 = parseInt(a0_temp[0]);
  var a1 = parseInt(a0_temp[1]);
  var a2 = parseInt(a0_temp[2]);
  var b0_temp = readLine().split(' ');
  var b0 = parseInt(b0_temp[0]);
  var b1 = parseInt(b0_temp[1]);
  var b2 = parseInt(b0_temp[2]);

  var results = {
    alice: 0,
    bob: 0
  };

  if (compare(a0, b0) > 0) {
    results.alice++;
  } else if (compare(a0, b0) < 0) {
    results.bob++;
  }

  if (compare(a1, b1) > 0) {
    results.alice++;
  } else if (compare(a1, b1) < 0) {
    results.bob++;
  }

  if (compare(a2, b2) > 0) {
    results.alice++;
  } else if (compare(a2, b2) < 0) {
    results.bob++;
  }

  console.log("%d %d", results.alice, results.bob);
}
