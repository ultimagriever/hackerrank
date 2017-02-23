#!/bin/ruby

n = gets.strip.to_i
arr = gets.strip
arr = arr.split(' ').map(&:to_i)

positives = arr.select do |val|
    val > 0
end

negatives = arr.select do |val|
    val < 0
end

zeroes = arr.select do |val|
    val == 0
end

pos = positives.length.to_f / n
neg = negatives.length.to_f / n
zer = zeroes.length.to_f / n

print "#{pos}\n"
print "#{neg}\n"
print "#{zer}"
