module main

open System

[<EntryPoint>]

let main argv = 
    //printfn "%A" argv
    Console.WriteLine("Кокую зодачу: ")
    let choice = Console.ReadLine()
    match choice with
    |"1"->Zad1.zad1()
    |"2"->Zad2.zad2()
    |"3"->Zad3.zad3()
    |"4"->Zad4.zad4()
    |"8"->Zad8.zad8()
    |"List"->Listfuncs.zad1()
    |_->printfn "Вы врёти"
          
    Console.ReadKey() |> ignore
    0 // возвращение целочисленного кода выхода