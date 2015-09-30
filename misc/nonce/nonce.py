import sys
import ethpow
import math
import utils
from rlp.sedes import big_endian_int, BigEndianInt, Binary
from rlp.utils import decode_hex, encode_hex, ascii_chr, str_to_bytes



block_number = int(sys.argv[1]);
difficulty = int(sys.argv[5]);
header_hash = decode_hex(sys.argv[2])
mixhash = decode_hex(sys.argv[3])
nonce = decode_hex(sys.argv[4])



#print "\nBlock_Number:",block_number
#print "\nHeader_hash:"+header_hash
#print "\nMixhash:"+mixhash
#print "\nNonce:"+nonce
#print "\nDiff:",difficulty


#check_pow(block_number, header_hash, mixhash, nonce, difficulty):

print ethpow.check_pow(block_number, header_hash, mixhash, nonce, difficulty)


