flag = "crittografia"
result = ""
for c in flag:
    result += str(ord(c)-96)
    result += "-"

print(result)