module Zad4

open System

let zad4()=
    printfn "Введите три числа для нахождения среднего арифметического: "
    let x = [for i in 1..3 do 
                let i = float(Console.ReadLine())
                yield i]
    let avg = List.average(x)
    printfn "Среднее = %A" avg   
    printfn " "
zad4()

