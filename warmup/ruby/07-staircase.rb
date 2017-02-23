#!/bin/ruby

n = gets.strip.to_i

def spacefill(str, len)
    spaces = len - str.length
    result = " " * spaces
    result + str
end

def staircase(arr, len, i = 1)
    arr.push(spacefill("#" * i, len))

    if i == len
        arr
    else
        i = i + 1
        staircase(arr, len, i)
    end
end

arr = Array::new
print staircase(arr, n).join("\n")
