def fib_mod(n, m):
    k = 0
    arr = [0, 1]
    for i in range(2, n):
        arr.append((arr[i-1] + arr[i-2]) % m)
        k = k + 1
        if (arr[i] == 1) and (arr[i - 1] == 0):
            break
    print(arr[(n % k)])


def main():
    n, m = map(int, input().split())
    print(fib_mod(n, m))


if __name__ == "__main__":
    main()


