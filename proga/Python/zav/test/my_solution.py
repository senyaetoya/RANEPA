def fib_mod(n, m):
    pisano = [0, 1]
    k = 1
    for i in range(2, m*6):
        pisano.append((pisano[i-1] + pisano[i-2]) % m)
        if pisano[i] == 1 and pisano[i-1] == 0:
            break
        k = k+1
    return pisano[n % k]


def main():
    n, m = map(int, input().split())
    print(fib_mod(n, m))


if __name__ == "__main__":
    main()
