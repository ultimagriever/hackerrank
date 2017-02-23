#!/bin/ruby

time = gets.strip

ampm = time[/(am|pm)/i]

time = time.delete ampm
time = time.split ":"

if ampm.match /am/i
    if time[0] == "12"
        time[0] = "00"
    end
else
    if time[0] != "12"
        time[0] = (time[0].to_i + 12).to_s
    end
end

print time.join ":"
