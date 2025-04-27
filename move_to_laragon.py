import os
import shutil

origen = r'C:\Users\Pauk\Desktop\adoptauntomate'
destino = r'C:\laragon'

os.makedirs(destino, exist_ok=True)

# Mover todos los archivos
for archivo in os.listdir(origen):
    ruta_origen = os.path.join(origen, archivo)
    ruta_destino = os.path.join(destino, archivo)

    # Verificar si es un archivo
    if os.path.isfile(ruta_origen):
        shutil.move(ruta_origen, ruta_destino)
        print(f'Movido: {archivo}')

print('Todos los archivos han sido movidos.')
