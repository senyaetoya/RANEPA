def counter(maxn, minn):
    a, b = 0, 1
    dif = maxn - minn
    for i in range(minn - 1):
        a, b = b, a + b
    min_fib = b
    for i in range(dif):
        a, b = b, a + b
    max_fib = b
    return min_fib, max_fib


def fib_big_mod(n, m):
    if n <= m:
        return counter(m, n)
    if n > m:
        return counter(n, m)


def main():
    n, m = map(int, input().split())
    print(fib_big_mod(n, m))


if __name__ == "__main__":
    main()