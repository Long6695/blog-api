import { create } from "zustand";
import { devtools, persist } from "zustand/middleware";

interface rootState {
    root: number;
    increase: () => void;
    decrease: () => void;
}

export const useRootStore = create<rootState>()(
    devtools(
        persist(
            (set) => ({
                root: 0,
                increase: () => set((state) => ({ root: state.root + 1 })),
                decrease: () => set((state) => ({ root: state.root - 1 })),
            }),
            {
                name: "root-storage",
            }
        )
    )
);
