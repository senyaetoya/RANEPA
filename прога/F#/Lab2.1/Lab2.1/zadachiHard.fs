module zadachiHard

open System

let zad1() = 
    let list1 = [1..4]
    let power(list) = 
        List.map (fun x -> x*x) list
    let kvList1 = power(list1)
    let kubList1 = power(kvList1)
    printfn "Сумма соответсвенных квадратов и кубов списка: %A" (List.map2 (fun x y -> x + y) kvList1 kubList1)
zad1()

let zad2() =
    let personnel = [('f',28);('f',43);('m',25);('m',37);('m',48);('m',60);('n',1)] 
    let genders, _ = List.unzip personnel
    let gendersDistinct = List.distinct genders

    let list1, list2 = List.partition (fun (gender,_) -> gender = fst gendersDistinct) personnel
    let rec spisokSpiskov list2 =
        let list4, list3 = List.partition (fun (gender,_) -> gender = fst gendersDistinct) list2
        genders.Tail
        list3

    printfn "Средний возраст женщин: %A, средний возраст мужчин: %A" averageWomenAge averageMenAge    
zad2()

let zad3() = 
    let oklady = [10.0; 11.0; 12.5; 15.0; 13.0; 7.5]
    let newOklady = 1.15
    printfn "Новые оклады = %A" (List.map(fun x -> x*newOklady) oklady)
zad3()

let zad5() = 
    let list = [1..20]
    printfn "Лист квадратов четных чисел = %A" (List.map(fun x -> x*x) (List.filter(fun x -> x%2=0) list))
zad5()

let zad6() =
    let poezd = [1..20]
    printfn "Номера вагонов ресторанов: %A" (List.filter(fun x -> x%4=0) poezd)
zad6()

let zad7() =
    let poezd = [1..20]
    let seatsInPassenger = 20
    let kolvoSeatsInPoezd = poezd
                            |> List.filter(fun x -> x%3 <> 0)
    printfn "Количество сидений в поезде: %A" (kolvoSeatsInPoezd.Length*seatsInPassenger)
zad7()

(*let zad4() = 
    type kidCandy = {name:string; amount:int}
    let compareKidCandy kid =
                                
        
    let listToCompare = [
        { name = 'Оля'; amount = 10};
        { name = 'Ира'; amount = 3};
        { name = 'Слава'; amount = 7};
        { name = 'Каролина'; amount = 0}
        ]

    let justifiedAmount = listToCompare
                          |> List.averageBy(fun listToCompare.amount -> double amount) 
     
zad4()*)



