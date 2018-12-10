module Zad2

open System

let zad2()=
    printf "Радиус шарика? "
    let radius = float(Console.ReadLine())
    let volume radius : float =
        let pi = 3.14159265
        (4./3.) * pi * radius * radius * radius
    Console.WriteLine ("Объем шарика: {0}", System.Math.Round(volume radius,3))
    printfn " "
zad2()

