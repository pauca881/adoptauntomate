import os
import shutil

origen = r'C:\Users\Pauk\Desktop\adoptauntomate'
destino = r'C:\laragon'

os.makedirs(destino, exist_ok=True)

# Mover todos los archivos
for archivo in os.listdir(origen):
    ruta_origen = os.path.join(origen, archivo)
    ruta_destino = os.path.join(destino, archivo)

    if os.path.isfile(ruta_origen):
        try:
            # Si ya existe, lo elimina antes de mover
            if os.path.exists(ruta_destino):
                os.remove(ruta_destino)

            shutil.move(ruta_origen, ruta_destino)
            print(f'Movido: {archivo}')
        except Exception as e:
            print(f'Error al mover {archivo}: {e}')

print('Proceso completado.')
