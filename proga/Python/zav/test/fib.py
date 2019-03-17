def check_negative(n):
    if n < 0:
        raise ValueError


def fib(n):
    if n <= 1:
        return n
    else:
        return fib(n-1) + fib(n-2)


if __name__ == '__main__':
    while True:
        n = input('Input a positive integer or "no" to exit: ')
        if n == 'no':
            break
        try:
            n = int(n)
            check_negative(n)
            print(fib(n))
        except ValueError:
            print('This is not a positive integer')
