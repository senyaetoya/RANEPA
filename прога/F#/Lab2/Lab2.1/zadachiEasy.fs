module zadachiEasy

open System

let zad1() =
    let list1 = [1..9]
    let kvadratList1 = List.map (fun x -> x*x) list1
    printfn ("Квадрат листа %A = %A") list1 kvadratList1
zad1()

let zad2() =
    printfn ("Есть ли в списке [1..1..8] число 5?")
    let list2 = [1..1..8]
    let isNumber number = number = 5
    match List.tryFind isNumber list2 with
    | Some value -> printfn "true"
    | None -> printfn "false"
zad2()

let zad3() = 
    let list1 = [1..5]
    let list2 = [1..4]
    printfn "Общий список: %A" (List.append list1 list2)
zad3()

let zad4() = 
    let step = 3
    let list1 = [1..step..step*2]
    printfn "Сумма кубов списка: %A = %A" list1 (List.sum(List.map(fun x -> x*x*x) list1))
zad4()

let zad5() = 
    printfn ("Есть ли в списке ['a';'b';'c'] символ 'b'?")
    let list2 = ["a";"b";"c"]
    let isSymbol symbol= symbol = "b"
    match List.tryFind isSymbol list2 with
    | Some value -> printfn "true"
    | None -> printfn "false"
zad5()

let zad6() = 
    let list1 = [1..3]
    let list2 = [1..4]
    printfn "Первый элемент первого списка - %A, второй элемент второго списка - %A" list1.Head list2.Tail
zad6()




