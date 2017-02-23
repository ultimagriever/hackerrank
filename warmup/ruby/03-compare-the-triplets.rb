#!/bin/ruby

a0,a1,a2 = gets.strip.split(' ')
a0 = a0.to_i
a1 = a1.to_i
a2 = a2.to_i
b0,b1,b2 = gets.strip.split(' ')
b0 = b0.to_i
b1 = b1.to_i
b2 = b2.to_i

def compare(a, b)
    a - b
end

alice = 0;
bob = 0;

if compare(a0, b0) > 0
    alice = alice + 1
end
if compare(a0, b0) < 0
    bob = bob + 1
end

if compare(a1, b1) > 0
    alice = alice + 1
end
if compare(a1, b1) < 0
    bob = bob + 1
end

if compare(a2, b2) > 0
    alice = alice + 1
end
if compare(a2, b2) < 0
    bob = bob + 1
end

print "#{alice} #{bob}"
