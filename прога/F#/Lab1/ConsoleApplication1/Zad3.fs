module Zad3

open System

let zad3()=
    printfn "Число, возводимое в квадрат, а затем умножаемое на три: "
    let y = int(Console.ReadLine())
    let konveer = y |> fun y -> y*y |> fun y -> y*3
    Console.WriteLine ("Результат: {0}", konveer)
    printfn " "
zad3()

