#!/bin/ruby

n = gets.strip.to_i
a = Array.new(n)
for a_i in (0..n-1)
    a_t = gets.strip
    a[a_i] = a_t.split(' ').map(&:to_i)
end

def diagonal_diff(arr)
    diff = d1(arr) - d2(arr)
    diff.abs
end

def d1(arr)
    i = 0
    j = 0
    sum = 0

    while i < arr.length do
        sum = sum + arr[i][j]
        i = i + 1
        j = j + 1
    end

    sum
end

def d2(arr)
    i = 0
    j = arr.length - 1
    sum = 0

    while i < arr.length do
        sum = sum + arr[i][j]
        i = i + 1
        j = j - 1
    end

    sum
end

print diagonal_diff(a)
