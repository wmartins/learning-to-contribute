-- Códigos simples. Apenas para ter algo feito em Haskell aqui, por favor né.
-- Não testei se compilam...

-- Inverte um vetor
inverso :: [a] -> [a]
inverso [] = []
inverso (x:xs) = inverso xs ++ [x]

-- Maior elemento de uma lista de inteiros
maior :: [Int] -> Int
maior [x] = x
maior (x:xs)
    | x > maior xs = x
    | otherwise = maior xs

-- Soma de uma lista de inteiros
soma :: [Int] -> Int
soma [] = 0
soma (x:xs) = x + soma xs

-- Quicksort
quicksort :: [a] -> [a]
quicksort [] = []
quicksort (x:xs) = (quicksort menores) ++ [x] ++ (quicksort maiores)
    where
      menores = filter (< x) xs
      maiores = filter (> x) xs

-- Retorna tamanho de uma lista
tamanho x = soma [1 | _ <- x]

-- Fatorial
fatorial :: Int -> Int
fatorial 0 = 1
fatorial x = x * fatorial x-1
