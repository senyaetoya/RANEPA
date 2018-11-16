module Zad8

open System

let zad8()=
    printfn "Задача с зоопарком."

    let legs_sum legs kolvo =
        legs * kolvo

    printfn "Сколько в зоопарке гвакозябр? "
    let g_kolvo = int(Console.ReadLine())
    let g_legs_sum = legs_sum g_kolvo

    printfn "Сколько ног у гвакозябр? "
    let g_legs = int(Console.ReadLine())
    let g_legs_sum1 = g_legs_sum g_legs

    printfn "Сколько в зоопарке буровиков? "
    let b_kolvo = int(Console.ReadLine())
    let b_legs_sum = legs_sum b_kolvo

    printfn "Сколько ног у буровиков? "
    let b_legs = int(Console.ReadLine())
    let b_legs_sum1 = b_legs_sum b_legs

    printfn "Сколько в зоопарке оробелов? "
    let o_kolvo = int(Console.ReadLine())
    let o_legs_sum = legs_sum o_kolvo

    printfn "Сколько ног у оробелов? "
    let o_legs = int(Console.ReadLine())
    let o_legs_sum1 = o_legs_sum o_legs

    let sum = g_legs_sum1 + b_legs_sum1 + o_legs_sum1

    Console.WriteLine ("Ответ: {0}", sum)
    printfn " "
zad8()

