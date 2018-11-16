module difficulty

open System

let choice1() =
    Console.WriteLine("Кокую зодачу: ")
    let choice = Console.ReadLine()
    printfn ""
    match choice with
    |"1"->zadachiEasy.zad1()
    |"2"->zadachiEasy.zad2()
    |"3"->zadachiEasy.zad3()
    |"4"->zadachiEasy.zad4()
    |"5"->zadachiEasy.zad5()
    |_->printfn "Вы врёти"
choice1()

let choice2() =
    Console.WriteLine("Кокую зодачу: ")
    let choice = Console.ReadLine()
    printfn ""
    match choice with
    |"1"->zadachiHard.zad1()
    |"2"->zadachiHard.zad2()
    |"3"->zadachiHard.zad3()
    |"5"->zadachiHard.zad5()
    |"6"->zadachiHard.zad6()
    |"7"->zadachiHard.zad7()
    |_->printfn "Вы врёти"
choice2()