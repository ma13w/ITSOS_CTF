import base64

def encode_string(input_string):
    return base64.b64encode(base64.b32encode(base64.b64encode(base64.b32encode(input_string.encode())))).decode()

print(encode_string("flag{cyb3r_ch3f_15_1ncr34d1bl3}"))
