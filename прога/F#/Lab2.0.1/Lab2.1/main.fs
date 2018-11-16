module main

open System

[<EntryPoint>]
let rec main argv =  

    Console.WriteLine("Какую сложность хотите?: easy, hard")
    let choice = Console.ReadLine()
    printfn ""
    match choice with
    |"easy" -> difficulty.choice1()
    |"hard" -> difficulty.choice2()
    |_ -> printfn "Вы всё врети"

    printfn ""
    printfn "Чтобы выйти, нажмите 'q'... "

    let x = Console.ReadLine()
    match x with
         |"q" -> 0
         |_ -> main [||]

    
