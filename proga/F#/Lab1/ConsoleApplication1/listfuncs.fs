module Listfuncs

open System

let zad1()=
    let f1 x=(x%5=0)
    let f2, f3=
        List.partition f1 [1..15]
zad1()





