import sys
import ethpow
import math
import utils
import json
import Queue
import threading
import multiprocessing
import subprocess
import base64
from rlp.sedes import big_endian_int, BigEndianInt, Binary
from rlp.utils import decode_hex, encode_hex, ascii_chr, str_to_bytes


f = open(sys.argv[1],'r')
valuejson = base64.b64decode(f.read());
jsonArray = json.loads(valuejson)
jsonArrayElements = jsonArray['array'];



q = Queue.Queue()
for i in range(len(jsonArrayElements)):
    q.put(i)

def worker():
    while True:
        item = q.get()
        try:
            block_number = int(jsonArrayElements[int(item)]['block'])
            difficulty = int(jsonArrayElements[int(item)]['diff'])
            header_hash = decode_hex(jsonArrayElements[int(item)]['pow'])
            mixhash = decode_hex(jsonArrayElements[int(item)]['digest'])
            nonce = decode_hex(jsonArrayElements[int(item)]['nonce'])
            result = ethpow.check_pow(block_number, header_hash, mixhash, nonce, difficulty)
            print 'I:'+str(item)+' Nonce:'+ encode_hex(nonce)+'='+str(result)
        finally:
            q.task_done()

cpus=multiprocessing.cpu_count() 
print("Creating %d threads" % cpus)
for i in range(cpus):
     t = threading.Thread(target=worker)
     t.daemon = True
     t.start()

q.join()



